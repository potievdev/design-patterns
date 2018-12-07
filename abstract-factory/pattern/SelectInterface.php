<?php

namespace pattern;

/**
 * Interface SelectInterface
 * @package pattern
 */
interface SelectInterface
{
    /**
     * Sets options for select element
     * @param array $options
     */
    public function setOptions(array $options);

    /**
     * Render select element
     */
    public function render();
}