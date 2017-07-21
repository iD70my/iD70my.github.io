<? ob_start();
include"inc/header.php";?>
<?include"inc/navbar.php";?>
		<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12"><center>
                    <img class="img-responsive" src="<?=setting(site_img);?>" alt=""></center></br>
 
	<?php
	
	
if($_POST['go']){
	

$link_id = save(save2($_POST['link_id']));

   $sel= mysql_query("select * from link where link_id='$link_id'");
   $sel2= mysql_query("select * from link where link_code='$link_id'");
	$ro  = mysql_fetch_object($sel);
	$ro2  = mysql_fetch_object($sel2);
	$url = save(save2($ro->link_url));
	$url2 = save(save2($ro2->link_url));
	$num = @mysql_num_rows($sel);
	$num2 = @mysql_num_rows($sel2);

if(empty($link_id)){
	
   echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
الرجاء ادخال كود او  رقم
  </div>';

	
}

elseif($num==0 and $num2==0){
		 echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
   الرابط غير موجود!
</div>';
	}
	elseif($num2!=0){
		header('Location:'.$url2);
//refresh(0,$url);
	exit();
		
	}
	else{
	header('Location:'.$url);
//refresh(0,$url);
	exit();
	}
	
}
?>	
 <form method="post"> <table class="table table-bordered">
    <thead>
      <tr>
        <th><center><FONT FACE="El Messiri" SIZE="5" >ادخل الرقم بالانجليزي</FONT></center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input name="link_id"type="text" class="form-control" placeholder="ادخل الرقم بالانجليزي" required></td>
      </tr>
	  <tr>
  <td><center><input name="go"type="submit" class="btn btn-primary" value="اذهـب"> </center></td>      </tr>
  </table>
  </form>
<!-- <center> 
 <div class="alert alert-success" role="alert"><b>❖ اكتب الرقم باللغة الانجليزية فقط ❖</b></div>
 </center> -->
 <center>
 <? if(ads(ads1_active)==1){
 echo ads(ads1);
 }
 ?>
 </center>
 <center>
 <? if(ads(ads2_active)==1){
						echo ads(ads2);
						}
						
						?>
						
 </center>
  </div>
</center>
</div>
 <div class="col-sm-12">
 <link href="https://fonts.googleapis.com/css?family=El+Messiri" rel="stylesheet">	
 <center><FONT FACE="El Messiri" SIZE="4" >تواصل معي من خلال</FONT></center>
<center>
  	 <?
	 $active_so     = setting_so(setting_so_active);
	 $facebook_so   =setting_so(setting_so_fb);
	 $twitter_so    =setting_so(setting_so_tw);
	 $instagram_so  =setting_so(setting_so_inst);
	 $youtube_so    =setting_so(setting_so_you);
	 $Google_plus_so=setting_so(setting_so_gp);
	if($active_so ==1){
		
		if($facebook_so!="#"){
			echo'<a href="'.$facebook_so.'">
      <img src="img/icon/facebook.png" alt="تابعنا على فيس بوك">
  </a>';
  
		}
		 
		if($twitter_so!="#"){
			echo'
			<a href="'.$twitter_so.'">
      <img src="img/icon/twitter.png" alt="تابعنا على تويتر">
	 </a>
			';
		}if($instagram_so!="#"){
			echo'
			<a href="'.$instagram_so.'">
      <img src="img/icon/instagram.png" alt="تابعنا على انستقرام">
	 </a>
			';
		}if($youtube_so!="#"){
			echo'
			 <a href="'.$youtube_so.'">
      <img src="img/icon/snapchat.png" alt="تابعنا على سناب شات">
	 </a>
			';
		}if($Google_plus_so!="#"){
			echo'
			<a href="'.$Google_plus_so.'">
      <img src="img/icon/call.png" alt="إتصل بنا على الرقم">
	 </a>
			';
		}
		
	}
	?>
   
</center>
	 
  </div>  
        </div>
        <!--  محادثة واتس -->

          <!--  محادثة واتس -->
        	<center>
                <BR><a href="https://twitter.com/im03th" class="twitter-follow-button" data-show-count="true" data-dnt="true"></a>       <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                <BR><section class="cd-intro">
               
    </header>
 <!-- تعطيل زر الموس الايمن -->
  <SCRIPT LANGUAGE="JavaScript"> 
<!-- Disable 
function disableselect(e){ 
return false 
} 

function reEnable(){ 
return true 
} 

//if IE4+ 
document.onselectstart=new Function ("return false") 
document.oncontextmenu=new Function ("return false") 
//if NS6 
if (window.sidebar){ 
document.onmousedown=disableselect 
document.onclick=reEnable 
} 
//--> 
</script>    
 <!-- تعطيل زر الموس الايمن -->

<?include"inc/footer.php";?>
