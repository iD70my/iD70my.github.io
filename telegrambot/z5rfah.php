<?php 
/*
Coder :- @coderIQ
*/
ob_start();
$API_KEY = "457473482:AAE-dOPH6L2JnnnthOEUS8-MJJ29jeXRikU";#توكن البوت
define('API_KEY',$API_KEY);
echo "<a href='https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."'>setwebhook</a>";
echo file_get_contents("https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{return json_decode($res);}}
#         SAJAD SALAM         #
$update   = json_decode(file_get_contents('php://input'));
$message  = $update->message;
$text     = $message->text;
$chat_id  = $message->chat->id;
$name     = $message->from->first_name;
$user     = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;

$info = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@z5rfah&user_id=".$from_id));
$per = $info->result->status;
if ($per == 'left') {
    if (!in_array($chat_id, $us)) {
    file_put_contents("gm.txt", $chat_id."\n",FILE_APPEND);
  }
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>" عليك الأشتراك في القناة لأستخدام البوت ⚡️ @z5rfah"
  ]);
} else {
    

if($text == '/start'){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"- مرحبا بك في بوت الزخرفة✨ ؛
• قم بأرسال اسمك ليتتم زخرفته بـ10 انواع  - 🌪",
'reply_markup'=>json_encode([
      'inline_keyboard'=>[ 
    [['text'=>"• قناتنا 📩 -",'url'=>'t.me/z5rfah']]
        ]
    ])
        ]);
}
if($_GET['s']){
    $text = 'sssasa';
    echo $count = count($text); 
}
if($text != '/start'and$text!='/us'){
  $items = [' •🌱💚﴿ֆ ❥', '🍿﴿ֆ ❥', '• 🌸💸 ❥˓  ', '🖤🌞﴿ֆ', ' • 🐼🌿﴾ֆ', ' •🙊💙﴿ֆ ❥', '-💁🏼‍♂️✨﴿ֆ ❥ ', '•|• 〄💖‘',
                        ' ⚡️🌞 •|•℡', '- ⁽🙆‍♂️✨₎ֆ', '❥┇💁🏼‍♂️🔥“', '💜💭℡ֆ', '-┆💙🙋🏼‍♂️♕', '- ⁽🙆🏻🍿₎ֆ',
                        '“̯ 🐼💗 |℡', '⁞ 🐝🍷', '┋⁽❥̚͢₎ 🐣💗', '•|• ✨🌸‘', '  ֆ 💭💔ۦ', 'ֆ 💛💭ۦ', 'ֆ ⚡️🔱ۦ',
                        '℡ᴖ̈💜✨⋮', '⋮⁽🌔☄️₎ۦ˛', '⁞❉💥┋♩', ' ⁞✦⁽☻🔥₎“ٰۦ', '℡ ̇₎ ✨🐯⇣✦', '⁞♩⁽🌞🌩₎⇣✿',
                        'ۦٰ‏┋❥ ͢˓🦁💛ۦ‏', '⚡️♛ֆ₎', '♛⇣🐰☄️₎✦', '⁾⇣✿💖┊❥', ' ₎✿💥😈 ⁞“❥', '😴🌸✿⇣', '❥┊⁽ ℡🦁🌸'];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text); 
   $k = str_replace('ض', 'ضِـٰٚـِْ✮ِـٰٚـِْ', $text);
   $k = str_replace('ص', 'صِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ث', 'ثِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ق', 'قِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ف', 'فِ͒ـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('غ', 'غِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ع', 'عِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('خ', 'خِ̐ـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ح', 'حِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ج', 'جِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ش', 'شِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('س', 'سِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ي', 'يِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ب', 'بِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ل', 'لِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'تِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ن', 'نِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('م', 'مِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ك', 'ڪِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ط', 'طِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ذ', 'ذِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ظ', 'ظِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('ظ', 'ظِـٰٚـِْ✮ِـٰٚـِْ', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
   $k = $text;
   $k = str_replace('ض', 'ض͜ــ๋͜ـ', $k);
   $k = str_replace('ص', 'ص͜ــ๋͜ـ', $k);
   $k = str_replace('ث', 'ث͜ــ๋͜ـ͜ــ๋͜ـ', $k);
   $k = str_replace('ق', 'ق͜ــ๋͜ـ', $k);
   $k = str_replace('ف', 'ف͒͜ــ๋͜ـ', $k);
   $k = str_replace('غ', 'غ͜ــ๋͜ـ', $k);
   $k = str_replace('ع', 'ع͜ــ๋͜ـ', $k);
   $k = str_replace('خ', 'خ̐͜ــ๋͜ـ', $k);
   $k = str_replace('ح', 'ح͜ــ๋͜ـ', $k);
   $k = str_replace('ج', 'ج͜ــ๋͜ـ', $k);
   $k = str_replace('ش', 'ش͜ــ๋͜ـ', $k);
   $k = str_replace('س', 'س͜ــ๋͜ـ', $k);
   $k = str_replace('ي', 'ي͜ــ๋͜ـ', $k);
   $k = str_replace('ب', 'ب͜ــ๋͜ـ', $k);
   $k = str_replace('ل', 'ل͜ــ๋͜ـ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'ت͜ــ๋͜ـ', $k);
   $k = str_replace('ن', 'ن͜ــ๋͜ـ', $k);
   $k = str_replace('م', 'م͜ــ๋͜ـ', $k);
   $k = str_replace('ك', 'ڪ͜ــ๋͜ـ', $k);
   $k = str_replace('ط', 'ط͜ــ๋͜ـ', $k);
   $k = str_replace('ظ', 'ظ͜ــ๋͜ـ', $k);
   $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('ظ', 'ظــ๋͜ـ', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
   $k = $text;
   $k = str_replace('ض', 'ضِـೋـ', $k);
   $k = str_replace('ص', 'صِـೋـ', $k);
   $k = str_replace('ث', 'ثِـೋـ', $k);
   $k = str_replace('ق', 'قِـೋـ', $k);
   $k = str_replace('ف', 'فِ͒ـೋـ', $k);
   $k = str_replace('غ', 'غِـೋـ', $k);
   $k = str_replace('ع', 'عِـೋـ', $k);
   $k = str_replace('خ', 'خِ̐ـೋـ', $k);
   $k = str_replace('ح', 'حِـೋـ', $k);
   $k = str_replace('ج', 'جِـೋـ', $k);
   $k = str_replace('ش', 'شِـೋـ', $k);
   $k = str_replace('س', 'سِـೋـ', $k);
   $k = str_replace('ي', 'يِـೋـ', $k);
   $k = str_replace('ب', 'بِـೋـ', $k);
   $k = str_replace('ل', 'لِـೋـ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'تِـೋـ', $k);
   $k = str_replace('ن', 'نِـೋـ', $k);
   $k = str_replace('م', 'مِـೋـ', $k);
   $k = str_replace('ك', 'ڪِـೋـ', $k);
   $k = str_replace('ط', 'طِـೋـ', $k);
   $k = str_replace('ظ', 'ظِـೋـ', $k);
  $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
   $k = str_replace('ض', 'ضـ๋͜‏ـ', $text);
   $k = str_replace('ص', 'صـ๋͜‏ـ', $k);
   $k = str_replace('ث', 'ثـ๋͜‏ـ', $k);
   $k = str_replace('ق', 'قـ๋͜‏ـ', $k);
   $k = str_replace('ف', 'ف͒ـ๋͜‏ـ', $k);
   $k = str_replace('غ', 'غـ๋͜‏ـ', $k);
   $k = str_replace('ع', 'عـ๋͜‏ـ', $k);
   $k = str_replace('خ', 'خ̐ـ๋͜‏ـ', $k);
   $k = str_replace('ح', 'حـ๋͜‏ـ', $k);
   $k = str_replace('ج', 'جـ๋͜‏ـ', $k);
   $k = str_replace('ش', 'شـ๋͜‏ـ', $k);
   $k = str_replace('س', 'سـ๋͜‏ـ', $k);
   $k = str_replace('ي', 'يـ๋͜‏ـ', $k);
   $k = str_replace('ب', 'بـ๋͜‏ـ', $k);
   $k = str_replace('ل', 'لـ๋͜‏ـ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'تـ๋͜‏ـ', $k);
   $k = str_replace('ن', 'نـ๋͜‏ـ', $k);
   $k = str_replace('م', 'مـ๋͜‏ـ', $k);
   $k = str_replace('ك', 'ڪـ๋͜‏ـ', $k);
   $k = str_replace('ط', 'طـ๋͜‏ـ', $k);
   $k = str_replace('ظ', 'ظـ๋͜‏ـ', $k);
$k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]); 
   $k = $text;
   $k = str_replace('ض', 'ضِٰـِۢ', $k);
   $k = str_replace('ص', 'صِٰـِۢ', $k);
   $k = str_replace('ث', 'ثِٰـِۢ', $k);
   $k = str_replace('ق', 'قِٰـِۢ', $k);
   $k = str_replace('ف', 'فِٰ͒ـِۢ', $k);
   $k = str_replace('غ', 'غِٰـِۢ', $k);
   $k = str_replace('ع', 'عِٰـِۢ', $k);
   $k = str_replace('خ', 'خِٰ̐ـِۢ', $k);
   $k = str_replace('ح', 'حِٰـِۢ', $k);
   $k = str_replace('ج', 'جِٰـِۢ', $k);
   $k = str_replace('ش', 'شِٰـِۢ', $k);
   $k = str_replace('س', 'سِٰـِۢ', $k);
   $k = str_replace('ي', 'يِٰـِۢ', $k);
   $k = str_replace('ب', 'بِٰـِۢ', $k);
   $k = str_replace('ل', 'لِٰـِۢ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'تِٰـِۢ', $k);
   $k = str_replace('ن', 'نِٰـِۢ', $k);
   $k = str_replace('م', 'مِٰـِۢ', $k);
   $k = str_replace('ك', 'ڪِٰـِۢ', $k);
   $k = str_replace('ط', 'طِٰـِۢ', $k);
   $k = str_replace('ظ', 'ظِٰـِۢ', $k);
   $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]); 
   $k = $text;
   $k = str_replace('ض', 'ضَٰـُـٰٓ', $k);
   $k = str_replace('ص', 'صَٰـُـٰٓ', $k);
   $k = str_replace('ث', 'ثَٰـُـٰٓ', $k);
   $k = str_replace('ق', 'قَٰـُـٰٓ', $k);
   $k = str_replace('ف', 'فَٰ͒ـُـٰٓ', $k);
   $k = str_replace('غ', 'غَٰـُـٰٓ', $k);
   $k = str_replace('ع', 'عَٰـُـٰٓ', $k);
   $k = str_replace('خ', 'خَٰ̐ـُـٰٓ', $k);
   $k = str_replace('ح', 'حَٰـُـٰٓ', $k);
   $k = str_replace('ج', 'جَٰـُـٰٓ', $k);
   $k = str_replace('ش', 'شَٰـُـٰٓ', $k);
   $k = str_replace('س', 'سَٰـُـٰٓ', $k);
   $k = str_replace('ي', 'يَٰـُـٰٓ', $k);
   $k = str_replace('ب', 'بَٰـُـٰٓ', $k);
   $k = str_replace('ل', 'لَٰـُـٰٓ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'تَٰـُـٰٓ', $k);
   $k = str_replace('ن', 'نَٰـُـٰٓ', $k);
   $k = str_replace('م', 'مَٰـُـٰٓ', $k);
   $k = str_replace('ك', 'ڪَٰـُـٰٓ', $k);
   $k = str_replace('ط', 'طَٰـُـٰٓ', $k);
   $k = str_replace('ظ', 'ظَٰـُـٰٓ', $k);
  $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
   $k = $text;
   $k = str_replace('ض', 'ضِٰـۛৣـ', $k);
   $k = str_replace('ص', 'صِٰـۛৣـ', $k);
   $k = str_replace('ث', 'ثِٰـۛৣـ', $k);
   $k = str_replace('ق', 'قِٰـۛৣـ', $k);
   $k = str_replace('ف', 'فِٰ͒ـۛৣـ', $k);
   $k = str_replace('غ', 'غِٰـۛৣـ', $k);
   $k = str_replace('ع', 'عِٰـۛৣـ', $k);
   $k = str_replace('خ', 'خِٰ̐ـۛৣـ', $k);
   $k = str_replace('ح', 'حِٰـۛৣـ', $k);
   $k = str_replace('ج', 'جِٰـۛৣـ', $k);
   $k = str_replace('ش', 'شِٰـۛৣـ', $k);
   $k = str_replace('س', 'سِٰـۛৣـ', $k);
   $k = str_replace('ي', 'يِٰـۛৣـ', $k);
   $k = str_replace('ب', 'بِٰـۛৣـ', $k);
   $k = str_replace('ل', 'لِٰـۛৣـ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'تِٰـۛৣـ', $k);
   $k = str_replace('ن', 'نِٰـۛৣـ', $k);
   $k = str_replace('م', 'مِٰـۛৣـ', $k);
   $k = str_replace('ك', 'ڪِٰـۛৣـ', $k);
   $k = str_replace('ط', 'طِٰـۛৣـ', $k);
   $k = str_replace('ظ', 'ظِٰـۛৣـ', $k);
  $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]); 
   $k = $text;
   $k = str_replace('ض', 'ض֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ص', 'ص֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ث', 'ث֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ق', 'ق֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ف', 'ف͒֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('غ', 'غ֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ع', 'ع֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('خ', 'خ̐֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ح', 'ح֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ج', 'ج֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ش', 'ش֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('س', 'س֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ي', 'ي֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ب', 'ب֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ل', 'ل֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'ت֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ن', 'ن֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('م', 'م֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ك', 'ڪ֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ط', 'ط֠ــۢ͜ـٰ̲ـ', $k);
   $k = str_replace('ظ', 'ظ֠ــۢ͜ـٰ̲ـ', $k);
  $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]); 
   $k = $text;
   $k = str_replace('ض', 'ض๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ص', 'ص๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ث', 'ث๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ق', 'ق๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ف', 'ف๋͒͜ـ❀๋͜ـ', $k);
   $k = str_replace('غ', 'غ๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ع', 'ع๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('خ', 'خ๋̐͜ـ❀๋͜ـ', $k);
   $k = str_replace('ح', 'ح๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ج', 'ج๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ش', 'ش๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('س', 'س๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ي', 'ي๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ب', 'ب๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ل', 'ل๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'ت๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ن', 'ن๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('م', 'م๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ك', 'ڪ๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ط', 'ط๋͜ـ❀๋͜ـ', $k);
   $k = str_replace('ظ', 'ظ๋͜ـ❀๋͜ـ', $k);
  $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]); 
   $k = $text;
   $k = str_replace('ض', 'ضـۘ❈ـۘ', $k);
   $k = str_replace('ص', 'صـۘ❈ـۘ', $k);
   $k = str_replace('ث', 'ثـۘ❈ـۘ', $k);
   $k = str_replace('ق', 'قـۘ❈ـۘ', $k);
   $k = str_replace('ف', 'ف͒ـۘ❈ـۘ', $k);
   $k = str_replace('غ', 'غـۘ❈ـۘ', $k);
   $k = str_replace('ع', 'عـۘ❈ـۘ', $k);
   $k = str_replace('خ', 'خ̐ـۘ❈ـۘ', $k);
   $k = str_replace('ح', 'حـۘ❈ـۘ', $k);
   $k = str_replace('ج', 'جـۘ❈ـۘ', $k);
   $k = str_replace('ش', 'شـۘ❈ـۘ', $k);
   $k = str_replace('س', 'سـۘ❈ـۘ', $k);
   $k = str_replace('ي', 'يـۘ❈ـۘ', $k);
   $k = str_replace('ب', 'بـۘ❈ـۘ', $k);
   $k = str_replace('ل', 'لـۘ❈ـۘ', $k);
   $k = str_replace('ا', 'آ', $k);
   $k = str_replace('ت', 'تـۘ❈ـۘ', $k);
   $k = str_replace('ن', 'نـۘ❈ـۘ', $k);
   $k = str_replace('م', 'م', $k);
   $k = str_replace('ك', 'ڪـۘ❈ـۘ', $k);
   $k = str_replace('ط', 'طـۘ❈ـۘ', $k);
   $k = str_replace('ظ', 'ظـۘ❈ـۘ', $k);
  $k = str_replace('ء', 'ء', $k);
   $k = str_replace('ؤ', 'ؤ', $k);
   $k = str_replace('ر', 'ر', $k);
   $k = str_replace('ى', 'ى', $k);
   $k = str_replace('ز', 'ز', $k);
   $k = str_replace('و', 'ﯛ̲୭', $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$k." ".$smile
   ]);
} 
}

   
