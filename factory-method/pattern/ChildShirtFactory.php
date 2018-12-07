<?php

namespace pattern;

/**
 * Class ChildShirtFactory
 * @package pattern
 */
class ChildShirtFactory extends ShirtFactory
{

    /**
     * @return Shirt
     */
    public function createShirt()
    {
        return new ChildShirt();
    }
}