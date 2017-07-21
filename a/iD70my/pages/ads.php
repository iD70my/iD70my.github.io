<?
if(go!=ads){
exit;
}
?>
 <div class="list-group-item active">التحكم في الإعلانات</div>
 <?
 if ($_POST['save']){
	 
	 $ads1 =$_POST['ads1'];
	 $ads1_active =$_POST['ads1_active'];
	 $ads2 =$_POST['ads2'];
	 $ads2_active =$_POST['ads2_active'];
	 
	 if (
$ads1_active==1 and empty($ads1) or
$ads2_active==1 and empty($ads2) 
)
	 {
		 echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
   الرجاء ادخال جميع الحقول
</div>';
		 
	 }else{
		
		 $update = mysql_query("
	update ads set
	ads1_active ='$ads1_active',
	ads1 = '$ads1',
	ads2_active = '$ads2_active',
	ads2 = '$ads2'
	") or die ("error update query");
	if($update)
	{
echo"<div class='alert btn-success'>تم التعديل بنجاح</div>";	
refresh(2,'?go=ads');		
	exit;}
		 
		 
		 
	 }
 }
 
 ?>
<form method="post" >
 <table class="table table-bordered">
    
    <tbody>
      <tr>
        <td class="alert-warning">تفعيل الاعلان الأول</td>
      </tr> 
	   <tr>
        <td > 
		<select name="ads1_active">
		  
		    <?if(ads(ads1_active)==1){
				  echo '
			   <option value="1">مفعل</option>    
              <option value="0">غير مفعل</option>';
				  }
				  else
				  {
					  echo '
					  <option value="0">غير مفعل</option>
					  <option value="1">مفعل</option>
              
					  '; 
				  }
				  ?>
		  
            </select>
			</td>
      </tr> 
	  
	  <tr>
        <td class="alert-warning">كود الاعلان</td>
      </tr> 
	  <tr>
        <td><textarea name="ads1" class="form-control" placeholder="كود الاعلانات"><?=ads(ads1);?></textarea></td>
      </tr> 
	  <tr>
        <td class="alert-warning">تفعيل الاعلان الثاني</td>
      </tr> 
	   <tr>
	   <td >
         <select name="ads2_active">
		  
		    <?if(ads(ads2_active)==1){
				  echo '
			   <option value="1">مفعل</option>    
              <option value="0">غير مفعل</option>';
				  }
				  else
				  {
					  echo '
					  <option value="0">غير مفعل</option>
					  <option value="1">مفعل</option>
              
					  '; 
				  }
				  ?>
		  
            </select></td>
      </tr> 
	   <tr>
        <td class="alert-warning">كود الاعلان</td>
      </tr> 
	  <tr>
        <td><textarea name="ads2" class="form-control" placeholder="كود الاعلانات"><?=ads(ads2);?></textarea></td>
      </tr> 
	  <tr>
	  
	  
	  <td><input name="save"type="submit" class="btn btn-primary" value="حفظ الاعدادات"></td>
	  
    </tbody>
  </table>
  
</form>