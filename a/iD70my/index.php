<?include"inc/header.php";?>
<?include"inc/navbar.php";?>
 <div class="container">
 <div class="row">
        <div class="col-lg-12">
		
		<? if(go==""){
	 include "pages/home.php";
 }
 elseif(go=="setting_site"){
	 include "pages/setting_site.php";
 }
 elseif(go=="editadmin"){
	 include "pages/editadmin.php";
 }
 
 elseif(go=="addlink"){
	 include "pages/addlink.php";
 }
 
 elseif(go=="editlink"){
	 include "pages/editlink.php";
 }
 elseif(go=="ads"){
	 include "pages/ads.php";
 }
 elseif(go=="setting_so"){
	 include "pages/setting_so.php";
 }
 
 
 
 ?>
		
		
</div> 
</div>
</div>
<?include"inc/footer.php";?>