<?php

namespace pattern;

/**
 * Interface ButtonInterface
 * @package pattern
 */
interface ButtonInterface
{
    /**
     * Set title of button
     * @param string $title
     */
    public function setTitle($title);

    /**
     * Rendering button
     */
    public function render();
}