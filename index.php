<?php
$ip = $_GET['ip'];
$proxy = 'isp2.hydraproxy.com:9989';
$ip_file = file("host.txt"); 
$ip_fi = end($ip_file);  
$ip= trim($ip_fi);
$proxy_auth = 'juna47485yzui118082:PfqlZAyuYmfGfzRF';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://premiumbins.tk/reverse.php?ip='.$ip.'&');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$result1 = curl_exec($ch);
$file = fopen("env.txt", "a");
fwrite($file, $result1);


echo $result1;
