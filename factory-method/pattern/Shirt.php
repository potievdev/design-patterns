<?php

namespace pattern;

/**
 * Class Shirt
 * @package pattern
 */
abstract class Shirt
{
    /**
     * Returns Image Tag
     * @return string
     */
    abstract public function getImage();

    /**
     * Return size of shirt
     * @return string
     */
    abstract public function getSize();

    /**
     * Returns short info
     * @return string
     */
    abstract public function getInfo();
}