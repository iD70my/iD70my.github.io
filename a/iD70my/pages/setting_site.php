<?
if(go!=setting_site){
exit;
}
?>
 <div class="list-group-item active">اعدادات الموقع</div>

 <?
 if ($_POST['save']){
	 
	 $site_name =$_POST['site_name'];
	 $site_img =$_POST['site_img'];
	 $site_desc  = $_POST['site_desc'];
	 $site_key  = $_POST['site_key'];
	 $site_open= $_POST['site_open'];
	 $site_msg_close  = $_POST['site_msg_close'];
	 $background  = $_POST['background'];
	 
	 
	 /*setting_site` (
 `site_name` VARCHAR( 255 ) NOT NULL ,
 `site_desc` TEXT NOT NULL ,
 `site_key` TEXT NOT NULL ,
 `site_open` INT NOT NULL ,
 `site_msg_close` TEXT NOT NULL
) ENGINE = MYISAM ;

	 */
	 if (empty($site_name) or empty($site_desc) or empty($site_key) or empty($site_img) or $site_open==0 and empty($site_msg_close))
	 {
		 echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
   الرجاء ادخال جميع الحقول
</div>';
		 
	 }else{
		 	$update = mysql_query("
	update setting_site set
	site_name='$site_name',
	site_img='$site_img',
	site_desc = '$site_desc',
	site_key = '$site_key',
	site_open = '$site_open',
	site_msg_close = '$site_msg_close',
	background='$background'
	") or die ("error update query");
	if($update)
	{
echo"<div class='alert btn-success'>تم التعديل بنجاح</div>";	
refresh(2,'?go=setting_site');	
	exit;}
		 
		 
		 
	 }
	 
	 
	 
	 
 }
 
 ?>
<form method="post" >
 <table class="table table-bordered">
    
    <tbody>
      <tr>
        <td class="alert-warning">اسم الموقع</td>
      </tr> 
	  <tr>
        <td ><input name="site_name"type="text" class="form-control" placeholder="اسم الموقع" value="<?=setting(site_name);?>"></td>
      </tr> 
	  <tr>
        <td class="alert-warning">صورة الموقع </td>
      </tr> 
	  <tr>
       
        <td ><input name="site_img"type="text" class="form-control" placeholder="صورة الموقع" value="<?=setting(site_img);?>"></td>
      </tr>
	  
	  
	     
        <td class="alert-warning">وصف الموقع</td>
      </tr> 
	  <tr>
       
         <td><textarea name="site_desc" class="form-control" placeholder="وصف الموقع"><?=setting(site_desc);?></textarea></td>
      </tr>
	   <tr>
        <td class="alert-warning">كلمات مفتاحية</td>
      </tr> 
	  <tr>
       
        <td><textarea name="site_key" class="form-control" placeholder="كلمات مفتاحية"><?=setting(site_key);?></textarea></td>
      </tr>
	 
	   <tr>
        <td class="alert-warning">حالة الموقع</td>
      </tr> 
	  <tr>  
	  
	  
	   <td ><select name="site_open">
			<?
			 if (setting(site_open)==1){
				 echo'
              <option value="1">متاح للزوار</option>
              <option value="0">مغلق</option>';
			 }else{
				 echo'
				 <option value="0">مغلق</option>
              <option value="1">متاح للزوار</option>';
			 }
			?>
            </select></td>
	  
        
      </tr>
	   <tr>
        <td class="alert-warning">رسالة الاغلاق</td>
      </tr> 
	  <tr>
       
        <td><textarea name="site_msg_close" class="form-control" placeholder="رسالة الاغلاق"><?=setting(site_msg_close);?></textarea></td>
      </tr>
	  
	  
	  <td><input name="save"type="submit" class="btn btn-primary" value="حفظ الاعدادات"></td>
	  
    </tbody>
  </table>
  
</form>