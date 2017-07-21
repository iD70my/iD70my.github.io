<?
if(go!=addlink){
exit;
}

?>
 <div class="list-group-item active">إضافة رابط جديد</div>
<?
 if($_POST['addlink1'])
	{
	$link_url = save(save3($_POST['link_url']));	
	
		if(empty($link_url)){
			  echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
   الرجاء ادخال رابط
</div>';
		}
elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$link_url)) {
   echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
   الرجاء ادخال رابط صحيح
</div>';
}

else{
	$insert = mysql_query("insert into link 
		(
		link_url
		)
		value
		(
		'$link_url'
		)");
		if($insert)
		{	
echo"<div class='alert btn-success'>تم إضافة الرابط بنجاح | <a class='btn btn-warning' href='?go=addlink'>إضافة رابط جديد</a></div>";	

$sel = mysql_query("select * from link ORDER BY link_id DESC limit 1");
	$num = @mysql_num_rows($sel);
	$ro  = mysql_fetch_object($sel);
      $link_id = $ro->link_id;

echo'
<div class="panel panel-default">
  <div class="panel-heading"><b>ID الرابط هو:</b></div>
  <div class="panel-body">
    <h3><b>'.$link_id.'</b></h3>
  </div>
</div>

';	
    		
	exit;}
	
}
		
	/*
	refresh(2,'?go=addlink');	
	*/	
		
	}
 
 ?>
<form method="post" >
 <table class="table table-bordered">
    
    <tbody>
      <tr>
        <td class="alert-warning">
		الرابط
		(يجب ان يبداء بـ http://)
		</td>
      </tr> 
	  <tr>
       
        <td ><input name="link_url"type="text" class="form-control" placeholder="ادخل الرابط" required></td>
      </tr>
	  
	  
	  <td><input name="addlink1"type="submit" class="btn btn-primary" value="إضافة"></td>
	  
    </tbody>
  </table>
  
</form>
 <div class="list-group-item active">إضافة رابط جديد برقم ID مخصص</div>
<?
 if($_POST['addlink2'])
	{
	$link_url = save(save3($_POST['link_url']));	
	$link_code = save(save3($_POST['link_code']));	
	
		if(empty($link_url) or empty($link_code)){
			  echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
 الرجاء ادخال جميع الحقول
</div>';
		}
elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$link_url)) {
   echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
   الرجاء ادخال رابط صحيح
</div>';
}

else{
	$insert = mysql_query("insert into link 
		(
		link_url,link_code
		)
		value
		(
		'$link_url',
		'$link_code'
		)");
		if($insert)
		{	
echo"<div class='alert btn-success'>تم إضافة الرابط بنجاح | <a class='btn btn-warning' href='?go=addlink'>إضافة رابط جديد</a></div>";	

$sel = mysql_query("select * from link ORDER BY link_id DESC limit 1");
	$num = @mysql_num_rows($sel);
	$ro  = mysql_fetch_object($sel);
      $link_code = $ro->link_code;

echo'
<div class="panel panel-default">
  <div class="panel-heading"><b>ID الرابط هو:</b></div>
  <div class="panel-body">
    <h3><b>'.$link_code.'</b></h3>
  </div>
</div>

';	
    		
	exit;}
	
}
		
	/*
	refresh(2,'?go=addlink');	
	*/	
		
	}
 
 ?>
<form method="post" >
 <table class="table table-bordered">
    
    <tbody>
      <tr>
        <td class="alert-warning">
		الرابط
		(يجب ان يبداء بـ http://)
		</td>
      </tr> 
	  <tr>
       
        <td ><input name="link_url"type="text" class="form-control" placeholder="ادخل الرابط" required></td>
      </tr>
	  
      <tr>
        <td class="alert-warning">
		كود الـID مخصص
		</td>
      </tr> 
	  <tr>
       
        <td ><input name="link_code"type="text" class="form-control" placeholder="ادخل الرابط" required></td>
      </tr>
	  
	  
	  <td><input name="addlink2"type="submit" class="btn btn-primary" value="إضافة"></td>
	  
    </tbody>
  </table>
  
</form>