<?php
// $url = "https://ebcadfs.extra.local/adfs/.well-known/openid-configuration/";
$url = "http://ip.jsontest.com/";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
echo $data;
?>