<?php

namespace app;

use pattern\ElementFactory;

/**
 * Class App
 * @package app
 */
class App
{
    /**
     * This is any logical part
     * @param ElementFactory $elementFactory
     */
    public function render(ElementFactory $elementFactory)
    {
        $select = $elementFactory->createSelect();
        $select->setOptions(['No', 'Yes']);
        $select->render();

        $button = $elementFactory->createButton();
        $button->setTitle('Submit');
        $button->render();
    }
}