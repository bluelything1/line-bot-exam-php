<?php



require "vendor/autoload.php";

$access_token = 'FXry0gAb+dsmAnQfBoTG7FFoKSYRgnSJrEfHC7nWqltxAtBVXmMPdeUb0DJ+MLOQdrRqyWEEiAo8ByAhN14WZpCxM0wyXWGl/2eT2aj64De6KXxsIcEZTVQwOmIdSTjZenKzgaeSVRcr8GelkFIuiQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '99bc0995dbbacc0e8ba032b5789e6a29';

$pushID = 'U177fc77fae473d605f12b90757160550';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







