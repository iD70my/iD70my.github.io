<? ob_start();

include"../inc/config.php";
include"../fun/fun.php";

$co_username = save($_COOKIE['username']);
$co_password = save($_COOKIE['password']);
$ulv = save($_COOKIE['ulv']);

if($co_username and $co_password and $ulv)
{
$sqlll = mysql_query("select * from admin where username='$co_username' and userpass='$co_password' and ulv=3 ");
$nummm = @mysql_num_rows($sqlll);
if($nummm == 0)
{
header("location: login.php");		
}
else 
{


}

}
else
{
header("location: login.php");		
}




?>