<?php

namespace pattern;

/**
 * Class DarkSelect
 * @package pattern
 */
class DarkSelect implements SelectInterface
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
        $select = '<select style="background-color: black; color: white;">';

        foreach ($this->options as $key => $value) {
            $select .= "<option value='$key'>$value</option>";
        }

        $select .= '</select>';

        echo $select;
    }
}