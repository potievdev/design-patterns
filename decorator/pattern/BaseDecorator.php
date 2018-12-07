<?php

namespace pattern;

/**
 * Class BaseDecorator
 * @package pattern
 */
class BaseDecorator
{
    /** @var PublisherInterface $element */
    protected $element;

    /**
     * BaseDecorator constructor.
     * @param PublisherInterface $element
     */
    public function __construct(PublisherInterface $element)
    {
        $this->element = $element;
    }
}