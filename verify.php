<?php
$access_token = 'GJrz7Hx2DmpPBDzfKR3VCOl/2SAxAX8X1yS7tA07A+uF139Pm2TDN03HinwbEz+Z3rYzPdwQ9v08GuPdKAG0k2HbmdGGqakr5Kk1Xx6THRwm7E1cjRlSoovRqcVHqaasRyWO3mNiYIhmCSsyFsJ0sgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
