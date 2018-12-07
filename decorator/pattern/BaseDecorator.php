<?php

namespace pattern;

/**
 * Class BaseDecorator
 * @package pattern
 */
class BaseDecorator
{
    /** @var RenderInterface $element */
    protected $element;

    /**
     * BaseDecorator constructor.
     * @param RenderInterface $element
     */
    public function __construct(RenderInterface $element)
    {
        $this->element = $element;
    }
}