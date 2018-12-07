<?php

namespace pattern;

/**
 * Class LightSelect
 * @package pattern
 */
class LightSelect implements SelectInterface
{
    private $options = [];

    /**
     * @inheritdoc
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
    }

    /**
     * @inheritdoc
     */
    public function render()
    {
        $select = '<select style="background-color: white; color: black;">';

        foreach ($this->options as $key => $value) {
            $select .= "<option value='$key'>$value</option>";
        }

        $select .= '</select>';

        echo $select;
    }
}