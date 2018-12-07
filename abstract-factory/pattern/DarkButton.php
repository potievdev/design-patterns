<?php

namespace pattern;

/**
 * Class DarkButton
 * @package pattern
 */
class DarkButton implements ButtonInterface
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
        echo '<button style="background-color: black; color: white">' . $this->title . '</button>';
    }
}