// Decimation's fork to remove emojis

const VERSION_CHECK_SUPPORTED = "😁👍  نظام جهازك يدعم الأداة ✔️ ";
const VERSION_CHECK_NEEDS_UPGRADE = " يجب أن يكون نظام جهازك %s على الأقل ";
const VERSION_CHECK_UNCONFIRMED = " %s لم يتم تجربته على النظام ";
const VERSION_CHECK_UNSUPPORTED = " %s إلى %s متوافق مع النظام ";

(function(document) {
	"use strict";

	function parseVersionString(version) {
		var bits = version.split(".");
		return [ bits[0], bits[1] ? bits[1] : 0, bits[2] ? bits[2] : 0 ];
	}

	function compareVersions(one, two) {
		// https://gist.github.com/TheDistantSea/8021359
		for (var i = 0; i < one.length; ++i) {
			if (two.length == i) {
				return 1;
			}

			if (one[i] == two[i]) {
				continue;
			} else if (one[i] > two[i]) {
				return 1;
			} else {
				return -1;
			}
		}

		if (one.length != two.length) {
			return -1;
		}

		return 0;
	}

	var prerequisite = document.querySelector(".prerequisite"),
		version = navigator.appVersion.match(/CPU( iPhone)? OS (\d+)_(\d+)(_(\d+))? like/i);

	if (!prerequisite || !version) {
		return;
	}

	var osVersion = [ version[2], version[3], version[4] ? version[5] : 0 ],

		osString = osVersion[0] + "." + osVersion[1] + (osVersion[2] && osVersion[2] != 0 ? "." + osVersion[2] : ""),
		minString = prerequisite.dataset.minIos,
		maxString = prerequisite.dataset.maxIos,

		minVersion = parseVersionString(minString),
		maxVersion = maxString ? parseVersionString(maxString) : null,

		message = VERSION_CHECK_SUPPORTED,
		isBad = false;

	if (compareVersions(minVersion, osVersion) == 1) {
		message = VERSION_CHECK_NEEDS_UPGRADE.replace("%s", minString);
		isBad = true;
	} else if (maxVersion && compareVersions(maxVersion, osVersion) == -1) {
		if ("unsupported" in prerequisite.dataset) {
			message = VERSION_CHECK_UNSUPPORTED.replace("%s", minString).replace("%s", maxString);
		} else {
			message = VERSION_CHECK_UNCONFIRMED.replace("%s", osString);
		}

		isBad = true;
	}

//	prerequisite.querySelector("p").textContent = message;
    prerequisite.querySelector("p").innerHTML = message;

	if (isBad) {
		prerequisite.classList.add("info");
	}
})(document);
