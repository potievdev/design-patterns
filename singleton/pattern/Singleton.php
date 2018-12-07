<?php

namespace pattern;

/**
 * Class Singleton
 * @package pattern
 */
class Singleton
{
    /** @var self $instance */
    private static $instance = null;

    /** @var integer $count */
    private $count = 0;

    /**
     * Restrict calling constructor from outside
     * Singleton constructor.
     */
    private function __construct()
    {
    }

    /**
     * Restricting cloning object
     */
    private function __clone()
    {
    }

    /**
     * @return Singleton
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Increment counter
     */
    public function increment()
    {
        ++$this->count;
    }

    /**
     * Getting count
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }
}