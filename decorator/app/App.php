<?php

namespace app;

use pattern\Button;
use pattern\RedBorderDecorator;
use pattern\PaddingDecorator;

/**
 * Class App
 * @package app
 */
class App
{
    /**
     * Rendering button
     * @param bool $padding
     * @param bool $redBorder
     */
    public function render($padding = false, $redBorder = false)
    {
        $button = new Button();

        if ($padding === true) {
            $button = new PaddingDecorator($button);
        }

        if ($redBorder === true) {
            $button = new RedBorderDecorator($button);
        }

        echo $button->render();
    }
}