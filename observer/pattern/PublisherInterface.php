<?php

namespace pattern;

/**
 * Interface PublisherInterface
 * @package pattern
 */
interface PublisherInterface
{
    /**
     * Adding new subscriber to messages
     * @param SubscriberInterface $subscriber
     */
    public function subscribe(SubscriberInterface $subscriber);

    /**
     * Sending message to subscribers
     * @param string $message
     * @return string
     */
    public function notify(string $message);
}