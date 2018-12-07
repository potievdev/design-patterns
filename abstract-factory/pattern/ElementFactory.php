<?php

namespace pattern;

/**
 * Abstract Factory
 * Class ElementFactory
 * @package pattern
 */
abstract class ElementFactory
{
    /**
     * @return ButtonInterface
     */
    abstract public function createButton();

    /**
     * @return SelectInterface
     */
    abstract public function createSelect();
}