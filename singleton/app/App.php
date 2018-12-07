<?php

namespace app;

use pattern\Singleton;

/**
 * Class App
 * @package app
 */
class App
{
    /**
     * Increment
     */
    public function increment()
    {
        $instance = Singleton::getInstance();
        $instance->increment();
    }

    /**
     * @return int
     */
    public function getCount()
    {
        $instance = Singleton::getInstance();
        return $instance->getCount();
    }
}