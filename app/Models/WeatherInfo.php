<?php
namespace App\Models;

class WeatherInfo {
    private array $info=[];

    public function __construct(\stdClass $info){
        foreach ($info as $infoSegment){
            $this->info[]=$infoSegment;
        }
    }

    public function getTemperature():float{
        return $this->info[3]->{"temp"};
    }

    public function getHumidity(){
        return $this->info[3]->{"humidity"};
    }

    public function getWindSpeed(){
        return $this->info[5]->{"speed"};
    }

    public function getWindDir(){
        return $this->info[5]->{"deg"};
    }


}