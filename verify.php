<?php
$access_token = '7X0WpZEFwwM84n8hfVcTeRvhYJheIud7IFoAwpcpPUXbu6ZyiD4v9KkarQbId6Zx3rYzPdwQ9v08GuPdKAG0k2HbmdGGqakr5Kk1Xx6THRyJGndFalJjpepEd6Z136QXyM2arBV6CAUjHYKxWDmbiAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
