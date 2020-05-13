<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Base;

use stdClass;

/**
 * @template TObject
 * @template TRaw
 */
interface CSequence extends Collection, \ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public function toArray(): ?array;
    
    public function jsonSerialize(): ?array;

    /**
     * @template T
     * @psalm-param array<int, T|TRaw> $data
     * @return static
     */
    public static function fromArray(array $data);

    /**
     * @psalm-param TObject|TRaw $value
     * @param $value
     * @return Collection
     */
    public function add($value);

    /**
     * @psalm-return ?TObject
     */
    public function at(int $index);

    public function getIterator(): MapperIterator;

    /**
     * @return ?TObject
     */
    public function current();

    /**
     * @return void
     */
    public function next();

    /**
     * @return int
     */
    public function key();

    /**
     * @return bool
     */
    public function valid();

    /**
     * @return void
     */
    public function rewind();

    /**
     * @param int $offset
     * @return bool
     */
    public function offsetExists($offset);

    /**
     * @param int $offset
     * @return ?TObject
     */
    public function offsetGet($offset);

    /**
     * @param int $offset
     * @psalm-param TObject|TRaw $value
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value);

    /**
     * @param int $offset
     * @return void
     */
    public function offsetUnset($offset);
}
