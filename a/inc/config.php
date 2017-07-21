<?
#اسم السيرفر
$con_host = "localhost";
#اسم المستخدم لقاعدة البيانات
$con_user = "linklink";
#كلمة السر لقاعدة البيانات
$con_pass = "linklink";
#اسم قاعدة البيانات
$con_data = "linklink";
$con = @mysql_connect($con_host,$con_user,$con_pass) or die ('error connect the serever');
if($con)
{
$con_select_db = mysql_select_db($con_data) 
or die ('error select database');	
}
?>







