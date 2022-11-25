<?php
namespace App\Controllers;
use App\WeatherRequest;




class WeatherController{

    public function city() {
        $cityName = $_GET['city'] ?? 'Riga';
        $title = "Weather in $cityName";
        $request = new WeatherRequest($cityName);
        $info = $request->getWeatherData();
        $temperature = $request->getWeatherData()->getTemperature();
        $humidity = $request->getWeatherData()->getHumidity();
        $windSpeed = $request->getWeatherData()->getWindSpeed();
        $windDirection = $request->getWeatherData()->getWindDir();
        return require_once 'views/index.php';
    }


}