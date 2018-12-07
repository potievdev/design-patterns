<?php

namespace pattern;

/**
 * Class AdultShirtFactory
 * @package pattern
 */
class AdultShirtFactory extends ShirtFactory
{
    /**
     * @return Shirt
     */
    public function createShirt()
    {
        return new AdultShirt();
    }
}