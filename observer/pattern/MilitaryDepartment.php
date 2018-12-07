<?php

namespace pattern;

/**
 * Class MilitaryDepartment
 * @package pattern
 */
class MilitaryDepartment implements SubscriberInterface
{
    /**
     * Receive message from publisher
     * @param string $message
     */
    public function receive($message)
    {
        echo "Military department receive message: $message \n";
    }
}