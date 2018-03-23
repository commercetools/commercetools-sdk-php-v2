<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Base;

class MapIterator extends \ArrayIterator
{
    /**
     * @var callable
     */
    private $callback;

    /**
     * @param mixed $value
     * @param callable $callback
     */
    public function __construct($value, callable $callback)
    {
        parent::__construct($value);
        $this->callback = $callback;
    }

    public function current()
    {
        $value = parent::current();
        $key = parent::key();
        return call_user_func($this->callback, $value, $key);
    }
}
