<?php

namespace pattern;

/**
 * Class AdultShirt
 * @package pattern
 */
class AdultShirt extends Shirt
{

    /**
     * Returns Image Tag
     * @return string
     */
    public function getImage()
    {
        return '<img src="adult.jpeg">';
    }

    /**
     * Return size of shirt
     * @return string
     */
    public function getSize()
    {
        return 'Big Size';
    }

    /**
     * Returns short info
     * @return string
     */
    public function getInfo()
    {
        return 'This is for adult peoples';
    }
}