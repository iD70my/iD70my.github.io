<?include"all.php";?>
<!DOCTYPE html>
<html lang="ar">
<!-- www.iM03th.com -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=setting(site_name);?></title>
	<meta name='description' content="<?=setting(site_desc);?>" />
	<meta name='keywords' content="<?=setting(site_key);?>" />
    <!-- Bootstrap -->
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap RTL Theme -->
    <link rel="stylesheet" href="style/css/bootstrap-rtl.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  
    <![endif]-->
    <link rel="shortcut icon" href="img/favicon.ico" />
  </head>
   <body style="background-image: url(img/bg_tile.jpg)">
<body>
  <? if (setting(site_open)==0){
	 echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  '.setting(site_msg_close).'
</div>'; 
	  exit;
  }