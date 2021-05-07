<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Base;

use stdClass;

/**
 * @template TScalar
 * @implements CSequence<TScalar, scalar>
 */
abstract class MapperScalarSequence implements CSequence
{
    /** @psalm-var ?array<int, TScalar|scalar> */
    private $data;
    /** @psalm-var array<string, array<string, int>> */
    private $indexes = [];
    /** @psalm-var MapperIterator */
    private $iterator;

    /**
     * @psalm-param ?array<int, TScalar|scalar> $data
     * @param array|null $data
     */
    final public function __construct(array $data = null)
    {
        if (!is_null($data)) {
            $this->index($data);
        }
        $this->data = $data;
        $this->iterator = $this->getIterator();
    }

    public function toArray(): ?array
    {
        return $this->data;
    }
    
    public function jsonSerialize(): ?array
    {
        return $this->data;
    }

    /**
     * @template T
     * @psalm-param array<int, T|scalar> $data
     * @return static
     */
    final public static function fromArray(array $data)
    {
        return new static($data);
    }

    /**
     * @param mixed $data
     */
    protected function index($data): void
    {
    }

    /**
     * @psalm-return TScalar|scalar|null
     */
    final protected function get(int $index)
    {
        if (isset($this->data[$index])) {
            return $this->data[$index];
        }
        return null;
    }

    /**
     * @psalm-param TScalar|scalar $data
     */
    final protected function set($data, ?int $index): void
    {
        if (is_null($index)) {
            $this->data[] = $data;
        } else {
            $this->data[$index] = $data;
        }
    }

    /**
     * @psalm-param TScalar|scalar $value
     * @param $value
     * @return Collection
     */
    public function add($value)
    {
        return $this->store($value);
    }

    /**
     * @psalm-param TScalar|scalar $value
     * @param $value
     * @return Collection
     */
    final protected function store($value)
    {
        $this->set($value, null);
        $this->iterator = $this->getIterator();

        return $this;
    }

    /**
     * @psalm-return ?TScalar
     */
    public function at(int $index)
    {
        return $this->mapper()($index);
    }

    /**
     * @psalm-return callable(int): ?TScalar
     */
    abstract protected function mapper();

    final protected function addToIndex(string $field, string $key, int $index): void
    {
        $this->indexes[$field][$key] = $index;
    }

    /**
     * @psalm-return ?TScalar
     */
    final protected function valueByKey(string $field, string $key)
    {
        return isset($this->indexes[$field][$key]) ? $this->at($this->indexes[$field][$key]) : null;
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
     * @return ?TScalar
     */
    public function current()
    {
        /** @psalm-var ?TScalar */
        return $this->iterator->current();
    }

    /**
     * @return void
     */
    public function next()
    {
        $this->iterator->next();
    }

    /**
     * @return int
     */
    public function key()
    {
        /** @psalm-var int */
        return $this->iterator->key();
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return $this->iterator->valid();
    }

    /**
     * @return void
     */
    public function rewind()
    {
        $this->iterator->rewind();
    }

    /**
     * @param int $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return !is_null($this->data) && array_key_exists($offset, $this->data);
    }

    /**
     * @param int $offset
     * @return ?TScalar
     */
    public function offsetGet($offset)
    {
        return $this->at($offset);
    }

    /**
     * @param int $offset
     * @psalm-param TScalar|scalar $value
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->set($value, $offset);
        $this->iterator = $this->getIterator();
    }

    /**
     * @param int $offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        if ($this->offsetExists($offset)) {
            /** @psalm-suppress PossiblyNullArrayAccess */
            unset($this->data[$offset]);
            $this->iterator = $this->getIterator();
        }
    }

    /**
     * @return static
     */
    final public static function of()
    {
        return new static();
    }
}
