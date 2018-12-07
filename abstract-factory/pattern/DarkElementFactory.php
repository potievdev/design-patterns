<?php

namespace pattern;

/**
 * Generates dark elements
 * Class DarkElementFactory
 * @package pattern
 */
class DarkElementFactory extends ElementFactory
{
    /**
     * @inheritdoc
     */
    public function createButton()
    {
        return new DarkButton();
    }

    /**
     * @inheritdoc
     */
    public function createSelect()
    {
        return new DarkSelect();
    }
}