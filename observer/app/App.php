<?php

namespace app;

use pattern\AirTransportsDepartment;
use pattern\MilitaryDepartment;
use pattern\WeatherDepartment;

/**
 * Class App
 * @package app
 */
class App
{
    /**
     * App constructor.
     * @param $temperature
     */
    public function __construct($temperature)
    {
        $weatherDepartment = new WeatherDepartment();
        $militaryDepartment = new MilitaryDepartment();
        $airTransportDepartment = new AirTransportsDepartment();

        // Adding subscribers
        $weatherDepartment->subscribe($militaryDepartment);
        $weatherDepartment->subscribe($airTransportDepartment);

        $weatherDepartment->changeTemperature($temperature);
    }
}