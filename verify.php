<?php
$access_token = 'FXry0gAb+dsmAnQfBoTG7FFoKSYRgnSJrEfHC7nWqltxAtBVXmMPdeUb0DJ+MLOQdrRqyWEEiAo8ByAhN14WZpCxM0wyXWGl/2eT2aj64De6KXxsIcEZTVQwOmIdSTjZenKzgaeSVRcr8GelkFIuiQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
