<?php

namespace app;

use pattern\Singleton;

/**
 * Class App
 * @package app
 */
class App
{
    public function increment()
    {
        $instance = Singleton::getInstance();
        $instance->increment();
        return $instance->getCount();
    }
}