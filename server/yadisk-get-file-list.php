<?php

$url = 'https://cloud-api.yandex.net/v1/disk/public/resources?public_key=https%3A%2F%2Fyadi.sk%2Fd%2FG7EQbugp3TTVTX';

$json = file_get_contents($url);

//TODO check for false

print('R'. $json);
$data = json_decode($json);
var_dump(json_decode($json));
var_dump(json_decode($json, true));


