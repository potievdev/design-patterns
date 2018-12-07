<?php

namespace pattern;

/**
 * Class LightButton
 * @package pattern
 */
class LightButton implements ButtonInterface
{
    private $title;

    /**
     * @inheritdoc
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @inheritdoc
     */
    public function render()
    {
        echo '<button style="background-color: white; color: black">' . $this->title . '</button>';
    }
}