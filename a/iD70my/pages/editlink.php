<?
if(go!=editlink){
exit;
}

?>
<?


################################################################################
if($_REQUEST['action'] == 'delete')
{
	$glink_id = intval($_GET['link_id']);
	
	if($glink_id)
	{
	$delete = mysql_query("delete from link where link_id='$glink_id'");
	if($delete)
	{	
echo"<div class='alert btn-success'>تم حذف الرابط بنجاح</div>";	
refresh(2,'?go=editlink');		
	exit;}
		
	}
	
}
################################################################################
if($_POST['editlink2'])
{
	$link_id = intval($_GET['link_id']);
$link_url2 = trim(strip_tags($_POST['link_url']));
	
if(empty($link_url2) )
{
echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
   الرجاء ادخال رابط
</div>';
}
elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$link_url2)) {
   echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
   الرجاء ادخال رابط صحيح
</div>';
}
else
{
$update = mysql_query("update link set 
link_url='$link_url2' where link_id='$link_id'
");	

if($update)
{
		
echo"<div class='alert btn-success'>تم تعديل الرابط بنجاح</div>";	
refresh(2,'?go=editlink');		
	exit;}
	
	else
	{echo '</br><div class="alert btn-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
   هناك خطاء في إضافة الرابط  
</div>';	
}

}


}// close post editpro

#--------------------------------------------#


if($_REQUEST['action'] == 'edit')
{
	$link_id = intval($_GET['link_id']);
	
	if($link_id)
	{
		$sel = mysql_query("select * from link where link_id='$link_id'");
		$ro  = mysql_fetch_object($sel);
		
	}
	
		?>
		
		
<form method="post" >
 <div class="list-group-item active">تعديل الرابط</div>
 <table class="table table-bordered">
    
    <tbody>
      <tr>
        <td class="alert-warning">الرابط</td>
      </tr> 
	  <tr>
       
        <td ><input name="link_url"type="text" class="form-control" placeholder="ادخل الرابط" value='<?=$ro->link_url;?>' required></td>
      </tr>
	  
	  
	  <td><input name="editlink2"type="submit" class="btn btn-primary" value="تعديل الرابط"></td>
	  
    </tbody>
  </table>
		
		<?
exit;
		}
	
#--------------------------------------------#

$sql = mysql_query("select link_id from link");
$num = mysql_num_rows($sql); // عدد الروابط

$n_pa = 5;

$n_page = $num/$n_pa;
$n_page = ceil($n_page);


$page = intval($_GET['page']);

if(!$page)
{
    $page = 1;	
}
else
{
	$page = $page;
}	

$start = $page-1;
$start = $start * $n_pa;
$sql2 = mysql_query("select * from link order by link_id limit $start,$n_pa");
echo"
<table class='table table-bordered'>
    <thead>
      <tr>
        <th>#ID</th>
        <th>الرابط</th>
        <th>تعديل</th>
        <th>حذف</th>
      </tr>
    </thead>
 
";
	while($row = mysql_fetch_object($sql2))
{

echo"<tbody>
      <tr>
        <td>".$row->link_id."</td>
        <td><a href='".$row->link_url."' target='_blank'>".$row->link_url."</a></td>
        <td><a href='?go=editlink&action=edit&link_id=".$row->link_id."'>تعديل</a></td>
        <td><a href='?go=editlink&action=delete&link_id=".$row->link_id."'>حذف</a></td>
      </tr>
     </tbody>
    
";	}
echo '
  </table>';

for($w = 1; $w <=$n_page; $w++)
{
if($page == $w)
{
echo "<span style='color:red;'> $w </span>";
}
else{
echo"<a href='?go=editlink&page=$w'> $w </a>";
}
}

?>
