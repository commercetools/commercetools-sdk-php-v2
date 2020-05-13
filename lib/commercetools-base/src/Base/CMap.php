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
 */
interface CMap extends Collection, \ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    /**
     * @template T
     * @psalm-param ?stdClass|array<string, T|stdClass> $data
     * @return static
     */
    public static function of($data = null);

    /**
     * @psalm-return array<string, stdClass|mixed>
     */
    public function toArray(): ?array;

    /**
     * @psalm-return array<string, stdClass|mixed>
     */
    public function jsonSerialize(): ?array;

    /**
     * @psalm-param ?stdClass $data
     * @psalm-return static
     */
    public static function fromStdClass(stdClass $data = null);

    /**
     * @template T
     * @psalm-param array<string, T|stdClass> $data
     * @return static
     */
    public static function fromArray(array $data);

    /**
     * @psalm-param TObject|stdClass $value
     * @param $value
     * @return $this
     */
    public function put(string $key, $value);

    /**
     * @psalm-return ?TObject
     */
    public function at(string $key);

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
     * @return string
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
     * @param string $offset
     * @return bool
     */
    public function offsetExists($offset);

    /**
     * @param string $offset
     * @return ?TObject
     */
    public function offsetGet($offset);

    /**
     * @param string $offset
     * @psalm-param TObject|stdClass $value
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value);

    /**
     * @param string $offset
     * @return void
     */
    public function offsetUnset($offset);
}
