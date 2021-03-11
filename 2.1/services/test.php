<?php


$url = "https://api.openweathermap.org/data/2.5/weather?q=London&appid=48775b2f8160bf3ef0087540b48c6bd4&lang=nl";
$restClient = new RestClient($authentication = null);




$restClient-> CurlInit($url);
$response = json_decode($restClient-> CurlExec(),true);
$vochtigheid = ($response[main][humidity]);
$temperature = round($response[main][temp]-273.15);
$description = ($response[weather][0][description]);

print_r ($vochtigheid);