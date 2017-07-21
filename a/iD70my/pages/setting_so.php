 <?
if(go!=setting_so){
exit;
}
?>
 <div class="list-group-item active">اعدادات الشبكات الإجتماعية</div>

 
 <?
 
 /*
 
  `setting_so_active`
  `setting_so_fb
  `setting_so_tw
  `setting_so_inst
  `setting_so_you
  `setting_so_gp
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
 */
 if ($_POST['save']){
		 $setting_so_active =$_POST['setting_so_active'];
		 $setting_so_fb =$_POST['setting_so_fb'];
		 $setting_so_tw =$_POST['setting_so_tw'];
		 $setting_so_inst =$_POST['setting_so_inst'];
		 $setting_so_you =$_POST['setting_so_you'];
		 $setting_so_gp =$_POST['setting_so_gp'];
	
	
	 if (empty($setting_so_fb) or empty($setting_so_tw) or empty($setting_so_inst) or empty($setting_so_you) or empty($setting_so_gp))
	 {
		 echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
   الرجاء ادخال جميع الحقول
</div>';
		 
	 }else{
		 	$update = mysql_query("
	update setting_so set
	setting_so_active='$setting_so_active',
	setting_so_fb='$setting_so_fb',
	setting_so_tw='$setting_so_tw',
	setting_so_inst='$setting_so_inst',
	setting_so_you='$setting_so_you',
	setting_so_gp='$setting_so_gp'
	
	") or die ("error update query");
	if($update)
	{
echo"<div class='alert btn-success'>تم التعديل بنجاح</div>";	
refresh(2,'?go=setting_so');	
	exit;}
		 
	 }
	 
 }
 
 ?>
<form method="post" >
 <table class="table table-bordered">
    <tbody>
      <tr>
        <td class="list-group-item info"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> ادخل رابط حسابك , كرابط وليس اسم مستخدم فقط,ويجب ان يبداء بـhttp:// , ولعدم تفعيل اي حساب ضع علامة #</td>
      </tr> 
	  <tr>
        <td class="alert-warning">تفعيل روابط الشبكات الاجتماعية اسفل الموقع</td>
      </tr> 
	  <tr>
        <td >
		<select name="setting_so_active">
		<?
			 if (setting_so(setting_so_active)==1){
				 echo'
		<option value="1">نعم</option>
		<option value="0">لا</option>
			  ';
			 }else{
				 echo'
				 <option value="0">لا</option>
		        <option value="1">نعم</option>
		'; }
			?>
		</select >
		</td>
      </tr> 
	  
	  
      <tr>
        <td class="alert-warning">رابط حساب فيس بوك:</td>
      </tr> 
	  <tr>
        <td ><input name="setting_so_fb"type="text" class="form-control" placeholder="ادخل حسابك" value="<?=setting_so(setting_so_fb);?>"></td>
      </tr> 
	  
	   <tr>
        <td class="alert-warning">رابط حساب تويتر:</td>
      </tr> 
	  <tr>
        <td ><input name="setting_so_tw"type="text" class="form-control" placeholder="ادخل حسابك" value="<?=setting_so(setting_so_tw);?>"></td>
      </tr> 
	  
	   <tr>
        <td class="alert-warning">رابط حساب انستقرام:</td>
      </tr> 
	  <tr>
        <td ><input name="setting_so_inst"type="text" class="form-control" placeholder="ادخل حسابك" value="<?=setting_so(setting_so_inst);?>"></td>
      </tr> 
	  
	   <tr>
        <td class="alert-warning">رابط حساب سناب شات:</td>
      </tr> 
	  <tr>
        <td ><input name="setting_so_you"type="text" class="form-control" placeholder="ادخل حسابك" value="<?=setting_so(setting_so_you);?>"></td>
      </tr> 
	  
	   <tr>
        <td class="alert-warning">رابط حساب تيليقرام:</td>
      </tr> 
	  <tr>
        <td ><input name="setting_so_gp"type="text" class="form-control" placeholder="ادخل حسابك" value="<?=setting_so(setting_so_gp);?>"></td>
      </tr> 
	  
	  
	  <td><input name="save"type="submit" class="btn btn-primary" value="حفظ الاعدادات"></td>
	  
    </tbody>
  </table>
  
</form>