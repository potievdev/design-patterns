<?php

namespace pattern;

/**
 * Class ShirtFactory
 * @package pattern
 */
abstract class ShirtFactory
{
    /**
     * @return Shirt
     */
    abstract public function createShirt();
}