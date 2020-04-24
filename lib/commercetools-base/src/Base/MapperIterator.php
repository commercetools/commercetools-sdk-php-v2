<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Base;

class MapperIterator extends \IteratorIterator
{
    /**
     * @var callable
     */
    private $mapper;

    public function __construct(\Traversable $iterator, callable $mapper)
    {
        parent::__construct($iterator);
        $this->mapper = $mapper;
    }

    public function current()
    {
        /** @psalm-suppress MixedReturnStatement */
        return call_user_func($this->mapper, parent::current(), parent::key());
    }
}
