<?php

namespace pattern;

/**
 * Generates light elements
 * Class LightElementFactory
 * @package pattern
 */
class LightElementFactory extends ElementFactory
{
    /**
     * @inheritdoc
     */
    public function createButton()
    {
        return new LightButton();
    }

    /**
     * @inheritdoc
     */
    public function createSelect()
    {
        return new LightSelect();
    }
}