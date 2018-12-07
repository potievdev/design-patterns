<?php

namespace pattern;

/**
 * Interface SubscriberInterface
 * @package pattern
 */
interface SubscriberInterface
{
    /**
     * Receive message from publisher
     * @param string $message
     */
    public function receive($message);
}