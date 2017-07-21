<?

###################[دالة اعدادات الموقع]###################
function setting($val)
{
$query1 = mysql_query("select * from setting_site")	
or die("error query");

$row1 = mysql_fetch_object($query1);

return $row1->$val;	

}

##################################################################################################
function ads($val4)
{
$query4 = mysql_query("select * from ads")	
or die("error query");

$row4 = mysql_fetch_object($query4);

return $row4->$val4;	

}

// function so
function setting_so($val4)
{
$query4 = mysql_query("select * from setting_so")	
or die("error query");

$row4 = mysql_fetch_object($query4);

return $row4->$val4;	

}


##################################################################################################
function refresh($sec,$url){
echo'<meta http-equiv="Refresh" content="'.$sec.'; url='.$url.'"  />';
}
##################################################################################################
date_default_timezone_set('Asia/Riyadh');
##################################################################################################

// function to protect input

function save($vars){

$vars = addslashes($vars);

$vars = htmlspecialchars($vars);

$vars = trim($vars);


$vars = stripslashes($vars);

$vars = strip_tags($vars);

return $vars;

}

//====================

// function to protect output

function save2($vars){

$vars = stripslashes($vars);

$vars = htmlspecialchars($vars);

$vars = strip_tags($vars);

return $vars;

}

//====================

function save3($getandpost)

    {

    $getandpost = htmlspecialchars($getandpost);

    $getandpost = str_replace("select","",$getandpost);

    $getandpost = str_replace("union", "", $getandpost);

    $getandpost = str_replace("update","",$getandpost);

    $getandpost = str_replace("insert","",$getandpost);

    $getandpost = str_replace("where","",$getandpost);

    $getandpost = str_replace("like","",$getandpost);

    $getandpost = str_replace("or","",$getandpost);

    $getandpost = str_replace("and","",$getandpost);

    $getandpost = str_replace("set","",$getandpost);

    $getandpost = str_replace("into","",$getandpost);

    $getandpost = str_replace("'", '"', $getandpost);

    $getandpost = str_replace(";", "", $getandpost);

    $getandpost = str_replace(">", "", $getandpost);

    $getandpost = str_replace("<", "", $getandpost);

    $getandpost = str_replace("*", "", $getandpost);

    $getandpost = strip_tags($getandpost);

    return $getandpost;

}


###############################################################################################################



?>