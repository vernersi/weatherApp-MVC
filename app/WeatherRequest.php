<?php

namespace App;


use App\Models\WeatherInfo;

class WeatherRequest
{

    private string $cityName;
    private WeatherInfo $weatherData;
    private string $apiKey = 'fb1a656f5c275b4fca3c68b60bf969fa';


    public function __construct(string $cityName)
    {
        $this->cityName = $cityName;
        $apiRequest = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=$this->cityName&appid=$this->apiKey&units=metric");
        $response_data =new WeatherInfo(json_decode($apiRequest)) ;
        $this->weatherData=$response_data;

    }

    public function getWeatherData():WeatherInfo{
        return $this->weatherData;
    }


}
