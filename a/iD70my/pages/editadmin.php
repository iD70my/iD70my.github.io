<?

if(go!=editadmin){
exit;
}

if($_POST['editadmin'])
{
$username = save($_POST['username']);
$password = md5($_POST['password']);	
$password2 = md5($_POST['password2']);	
 $ulv       =3;

if(
empty($username)or
empty($password)  
)
{
 echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  الرجاء ادخال جميع الحقول
</div>';	
}
elseif($password != $password2){
	
	 echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  كلمات المرور غير متطابقة
</div>';
}
elseif(strlen($password)<6){
	
	 echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  كلمة المرور قصيرة جدا يجب ان تكون اكبر من 5 احرف او ارقام
</div>';
}
elseif(strlen($username)<3){
	 echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
   اسم المدير قصير جدا , يجب ان يكون اكبر من  او يساوي 3 احرف
</div>';
}

else{
		
	$update = mysql_query("
	update admin set
	username='$username',
	userpass = '$password',
	ulv = '$ulv'
	where user_id =1
	") or die ("error update query");
	if($update)
	{
echo"<div class='alert btn-success'>تم التعديل بنجاح</div>";	
refresh(2,'?go=editadmin');	
	exit;
	}
}

}	
	// select admin from DB;
$sql= mysql_query("select * from admin where user_id=1");	
$row = mysql_fetch_object($sql);

	  	
		
?>
<form method="post" >
 <div class="list-group-item active">تعديل بيانات مدير الموقع</div>
 <table class="table table-bordered">
    <tbody>
      <tr>
        <td class="alert-warning">اسم المدير</td>
      </tr> 
	  <tr>
        <td ><input name="username"type="text" class="form-control" placeholder="" value="<?=$row->username;?>" required></td>
      </tr> <tr>
        <td class="alert-warning">كلمة السر</td>
      </tr> 
	  <tr>
        <td ><input name="password"type="password" class="form-control" placeholder="ادخل كلمة السر"required></td>
      </tr> <tr>
        <td class="alert-warning">إعادة كلمة السر</td>
      </tr> 
	  <tr>
        <td ><input name="password2"type="password" class="form-control" placeholder=" ادخل إعادة كلمة السر " required></td>
      </tr>
	  
	  
	  <td><input name="editadmin"type="submit" class="btn btn-primary" value="تعديل البيانات"></td>
	  
    </tbody>
  </table>
		