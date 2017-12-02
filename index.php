<?php

$API_KEY = '';
$TAG = 'hack';

// Doc: https://developers.giphy.com/docs/#random-endpoint
$url = "http://api.giphy.com/v1/gifs/random?api_key=$API_KEY&tag=$TAG";

$json_raw = file_get_contents($url);

$json = json_decode($json_raw, true);

$url = $json["data"]["image_url"];

header('Content-Type: image/gif');

echo file_get_contents($url);
