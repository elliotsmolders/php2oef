<?php
require_once ('../services/RESTClient.php');

class Weather
{
    public $url;
    private $restClient;

    public function __construct($city)
    {
        $this->url = "https://api.openweathermap.org/data/2.5/weather?q=".$city."&appid=48775b2f8160bf3ef0087540b48c6bd4&lang=nl";
        $this->restClient = new RestClient($authentication = null);

    }
    public function getHumidity(){
        $this->restClient->CurlInit($this->url);
        $response = json_decode($this->restClient->CurlExec(),true)[main][humidity];
        return $response.'%';
    }
    public function getWeather(){
        $this->restClient->CurlInit($this->url);
        $response = json_decode($this->restClient->CurlExec(),true)[weather][0][description];
        return 'Weer: '.$response;
    }
    public function getTemperature(){
        $this->restClient->CurlInit($this->url);
        $response = round(json_decode($this->restClient->CurlExec(),true)[main][temp]-273.15);
        return $response.' °C';
    }
}

$test = new Weather ('Paris');
print_r ($test->getTemperature());

/*$restClient-> CurlInit($url);
$response = json_decode($restClient-> CurlExec(),true);
$humidity = ($response[main][humidity]);
$temperature = round($response[main][temp]-273.15);
$description = ($response[weather][0][description]);

print_r ($vochtigheid);*/