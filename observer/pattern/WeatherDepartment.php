<?php

namespace pattern;

/**
 * Class WeatherDepartment
 * @package pattern
 */
class WeatherDepartment implements PublisherInterface
{
    /** @var SubscriberInterface[] $subscribers */
    protected $subscribers = [];

    /**
     * @param SubscriberInterface $subscriber
     */
    public function subscribe(SubscriberInterface $subscriber)
    {
        $this->subscribers[] = $subscriber;
    }

    /**
     * @param string $message
     * @return string|void
     */
    public function notify(string $message)
    {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->receive($message);
        }
    }

    /**
     * Setting temperature
     * @param integer $temperature
     */
    public function changeTemperature($temperature)
    {
        if ($temperature <= 0) {
            $message = "It is very cold weather, be careful";
        } elseif ($temperature > 40) {
            $message = "It is very hot weather, be careful";
        } else {
            $message = "It is very cool weather, good luck";
        }

        $this->notify($message);
    }
}