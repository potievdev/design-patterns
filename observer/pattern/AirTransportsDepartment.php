<?php

namespace pattern;

/**
 * Class AirTransportsDepartment
 * @package pattern
 */
class AirTransportsDepartment implements SubscriberInterface
{
    /**
     * Receive message from publisher
     * @param string $message
     */
    public function receive($message)
    {
        echo "<p>Air transports department receive message: <strong>$message</strong> </p>";
    }
}