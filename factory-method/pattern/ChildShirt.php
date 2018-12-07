<?php

namespace pattern;

/**
 * Class ChildShirt
 * @package pattern
 */
class ChildShirt extends Shirt
{

    /**
     * Returns Image Tag
     * @return string
     */
    public function getImage()
    {
        return '<img src="child.jpeg">';
    }

    /**
     * Return size of shirt
     * @return string
     */
    public function getSize()
    {
        return 'Small Size';
    }

    /**
     * Returns short info
     * @return string
     */
    public function getInfo()
    {
        return 'This is for children';
    }
}