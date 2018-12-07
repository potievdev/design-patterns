<?php

namespace pattern;

/**
 * Class RedBorderDecorator
 * @package pattern
 */
class RedBorderDecorator extends BaseDecorator implements RenderInterface
{
    /**
     * @return string
     */
    public function render()
    {
        $result = $this->element->render();

        return '<div style="border: 5px solid red;">' . $result . '</div>';
    }
}