<?php

namespace pattern;

/**
 * Class Button
 * @package pattern
 */
class Button implements PublisherInterface
{
    /**
     * @return string
     */
    public function render()
    {
        return '<button>Click me</button>';
    }
}