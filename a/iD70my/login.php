<? ob_start();
include"../inc/config.php";
include"../fun/fun.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>تسجيل الدخول</title>
    <!-- Bootstrap -->
    <link href="../style/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap RTL Theme -->
    <link rel="stylesheet" href="../style/css/bootstrap-rtl.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  </br>
 <div class="container">
 <div class="row">
        <div class="col-lg-12">
 <? if($_POST['login'])
  {
	 $username = save($_POST['username']);
	 $password = md5($_POST['password']);
	  
$sql = mysql_query("select * from admin where username='$username' and userpass='$password'");
$num = mysql_num_rows($sql);

if(empty($username) or empty($password)){
		  echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  الرجاء ادخال جميع الحقول
</div>';
}

else if ($num == 0) 
{
	 echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  خطاء في اسم المستخدم او كلمة المرور
</div>';
	  } else{
	 $row = mysql_fetch_object($sql);
	 $username2 = save($row->username);
	 $password2 = $row->userpass;
	 $ulv = save($row->ulv);
	   if($username2 == $username and $password2 == $password and $ulv == 3)
	 { 
  $ulv = $row->ulv;
setcookie("username",$username2,time()+33434);
setcookie("password",$password2,time()+33434);
setcookie("ulv",$ulv,time()+33434);
echo"<div class='alert btn-success'>تم تسجيل الدخول بنجاح</div>";	
echo'<meta http-equiv="Refresh" content="2; url=index.php"  />';
	 exit;
	  }
	  else{
		  
		  echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  خطاء في اسم المستخدم او كلمة المرور
</div>';	
	  }
	  }
	  
  } // close if
  
  
  ?> 
  
	<form method="post" action="login.php">
 <div class="list-group-item active">تسجيل الدخول</div>
 <table class="table table-bordered">
    <tbody>
      <tr>
        <td class="alert-warning">اسم المستخدم</td>
      </tr> 
	  <tr>
        <td ><input name="username"type="text" class="form-control" placeholder="ادخل اسم المستخدم" required></td>
      </tr> <tr>
        <td class="alert-warning">كلمة السر</td>
      </tr> 
	  
	  <tr>
        <td ><input name="password"type="password" class="form-control" placeholder=" ادخل كلمة السر " required></td>
      </tr>
	  
	  
	  <td><input name="login"type="submit" class="btn btn-primary" value="دخول"></td>
	  </form>
    </tbody>
  </table>
</div> 
</div>
</div>
<?include"inc/footer.php";?>