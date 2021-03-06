<?php

namespace pattern;

/**
 * Class PaddingDecorator
 * @package pattern
 */
class PaddingDecorator extends BaseDecorator implements PublisherInterface
{
    /**
     * @return string
     */
    public function render()
    {
        $result = $this->element->render();

        return '<div style="padding: 5px;">' . $result . '</div>';
    }
}