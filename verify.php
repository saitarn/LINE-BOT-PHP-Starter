<?php
$access_token = 'SdSJQTBYGDQK0NdPVOTsL1qgfu7B+N7c8CAGnSP3HgO93DC1/yjpejqo4n15OXYo/+Be2GcCAJuXHrEv6HiP1t6kV27tJwzdjxA1J9Gg5cNbhpLXujZrE4zwv4E6+pmk6x5OFJnnlW8+aKQX7kY7dgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;