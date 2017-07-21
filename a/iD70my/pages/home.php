<div class="alert alert-info" role="alert">
		مرحبا بك في لوحة تحكم السكربت
		</div>
<?
$sel = mysql_query("select * from link");
	$num = @mysql_num_rows($sel);

?>
  <div class="list-group-item active">معلومات السكربت</div>
 
  <table class="table table-bordered">
    
    <tbody>
      <tr>
        <td>مبرمج السكربت</td>
        <td>عبدالرحمن المعبدي</td>
      </tr>
      <tr>
        <td>موقع المبرمج</td>
        <td><a href="http://www.iM03th.com" target="_blank">www.iM03th.com</a></td>
      </tr>
      <tr>
        <td>تابعني على</td>
        <td><a href="http://www.instagram.com/iM03th" target="_blank">انستقرام</a> | <a href="http://www.twitter.com/iM03th" target="_blank">تويتر</a> | <a href="http://www.fb.com/iM03th" target="_blank">فيس بوك</a> | <a href="mailto:info@iM03th.com?bcc=im03th@hotmail.com" target="_blank">إيميل</a></td>
      </tr>
      <tr>
        <td>اصدار السكربت </td>
        <td>الاصدار: 1.2 </td>
      </tr>
	  
    </tbody>
  </table>
  <div class="list-group-item active">احصائيات الموقع</div>
 
  <table class="table table-bordered">
    <tbody>
      <tr>
        <td width='50%'> عدد الروابط</td>
        <td width='50%'><span class="badge"><?=$num;?></span></td>
      </tr>
	  <tr>
	  <td colspan="2">
	  <div class="alert alert-danger" role="alert"><strong>تنبيه!</strong> لا اسامح من يستخدمة الموقع لما يخالف الشريعة الاسلامية</div>
	  </td>
    </tr>
    </tbody>
  </table>