<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Base;

use stdClass;

/**
 * @template T
 */
abstract class MapperMap implements Collection, \ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    /** @psalm-var ?array<string, T|stdClass> */
    private $data;
    /** @var array<string, array<string, string>> */
    private $indexes = [];
    /** @var MapperIterator */
    private $iterator;

    /**
     * @psalm-param ?array<string, T|stdClass> $data
     */
    public function __construct(array $data = null)
    {
        if (!is_null($data)) {
            $this->index($data);
        }
        $this->data = $data;
        $this->iterator = $this->getIterator();
    }

    /**
     * @psalm-param ?stdClass|array<string, T|stdClass> $data
     *
     * @param null|mixed $data
     *
     * @return static
     */
    final public static function of($data = null)
    {
        if (is_array($data)) {
            return self::fromArray($data);
        }
        // @var stdClass $data)
        return self::fromStdClass($data);
    }

    /**
     * @psalm-return array<string, stdClass|mixed>
     */
    public function toArray(): ?array
    {
        return $this->data;
    }

    /**
     * @psalm-return array<string, stdClass|mixed>
     */
    public function jsonSerialize(): ?array
    {
        return $this->data;
    }

    /**
     * @psalm-param ?stdClass $data
     * @psalm-return static
     */
    final public static function fromStdClass(stdClass $data = null)
    {
        /** @var array<string, stdClass|T> $t */
        $t = (array) $data;

        return new static($t);
    }

    /**
     * @psalm-param array<string, T|stdClass> $data
     *
     * @return static
     */
    final public static function fromArray(array $data)
    {
        return new static($data);
    }

    /**
     * @psalm-param T|stdClass $value
     *
     * @param $value
     *
     * @return $this
     */
    public function put(string $key, $value)
    {
        return $this->store($key, $value);
    }

    /**
     * @psalm-return ?T
     */
    public function at(string $key)
    {
        return $this->mapper()($key);
    }

    public function getIterator(): MapperIterator
    {
        $keys = !is_null($this->data) ? array_keys($this->data) : [];
        $keyIterator = new \ArrayIterator(array_combine($keys, $keys));
        $iterator = new MapperIterator(
            $keyIterator,
            $this->mapper()
        );
        $iterator->rewind();

        return $iterator;
    }

    /**
     * @return ?T
     */
    public function current()
    {
        /** @psalm-var ?T $current  */
        return $this->iterator->current();
    }

    public function next()
    {
        $this->iterator->next();
    }

    /**
     * @return string
     */
    public function key()
    {
        /** @var string $key */
        return $this->iterator->key();
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return $this->iterator->valid();
    }

    public function rewind()
    {
        $this->iterator->rewind();
    }

    /**
     * @param string $offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return !is_null($this->data) && array_key_exists($offset, $this->data);
    }

    /**
     * @param string $offset
     *
     * @return ?T
     */
    public function offsetGet($offset)
    {
        return $this->at($offset);
    }

    /**
     * @param string $offset
     * @psalm-param T|stdClass $value
     *
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->store($offset, $value);
    }

    /**
     * @param string $offset
     */
    public function offsetUnset($offset)
    {
        if ($this->offsetExists($offset)) {
            // @psalm-suppress PossiblyNullArrayAccess
            unset($this->data[$offset]);
            $this->iterator = $this->getIterator();
        }
    }

    /**
     * @param mixed $data
     */
    protected function index($data): void
    {
    }

    /**
     * @psalm-return T|stdClass|null
     */
    final protected function get(string $key)
    {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }

        return null;
    }

    /**
     * @psalm-param T|stdClass $data
     *
     * @param mixed $data
     */
    final protected function set($data, string $key): void
    {
        $this->data[$key] = $data;
    }

    /**
     * @psalm-param T|stdClass $value
     *
     * @param $value
     *
     * @return $this
     */
    final protected function store(string $key, $value)
    {
        $this->set($value, $key);
        $this->iterator = $this->getIterator();

        return $this;
    }

    /**
     * @psalm-return callable(string): ?T
     */
    abstract protected function mapper();

    /**
     * @psalm-param T|stdClass $value
     */
    final protected function addToIndex(string $field, string $key, string $indexKey): void
    {
        $this->indexes[$field][$key] = $indexKey;
    }

    /**
     * @psalm-return ?T
     */
    final protected function valueByKey(string $field, string $key)
    {
        return isset($this->indexes[$field][$key]) ? $this->at($this->indexes[$field][$key]) : null;
    }
}
