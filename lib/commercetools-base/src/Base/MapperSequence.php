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
 * @implements CSequence<TObject, stdClass>
 */
abstract class MapperSequence implements CSequence
{
    /** @psalm-var ?array<int, TObject|stdClass> */
    private $data;
    /** @psalm-var array<string, array<string, int>> */
    private $indexes = [];
    /** @psalm-var MapperIterator */
    private $iterator;

    /**
     * @psalm-param ?array<int, TObject|stdClass> $data
     * @param array|null $data
     */
    final public function __construct(?array $data = null)
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

    #[\ReturnTypeWillChange]
    public function jsonSerialize(): ?array
    {
        return $this->data;
    }

    /**
     * @template T
     * @psalm-param array<int, T|stdClass> $data
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
     * @psalm-return TObject|stdClass|null
     */
    final protected function get(?int $index)
    {
        if (isset($this->data[$index])) {
            return $this->data[$index];
        }
        return null;
    }

    /**
     * @psalm-param TObject|stdClass $data
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
     * @psalm-param TObject|stdClass $value
     * @param $value
     * @return Collection
     */
    public function add($value)
    {
        return $this->store($value);
    }

    /**
     * @psalm-param TObject|stdClass $value
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
     * @psalm-return ?TObject
     */
    public function at(int $index)
    {
        return $this->mapper()($index);
    }

    /**
     * @psalm-return callable(int): ?TObject
     */
    abstract protected function mapper();

    /**
     * @psalm-param TObject|object $value
     */
    final protected function addToIndex(string $field, string $key, int $index): void
    {
        $this->indexes[$field][$key] = $index;
    }

    /**
     * @psalm-return ?TObject
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
     * @return ?TObject
     */
    public function current()
    {
        /** @psalm-var ?TObject */
        return $this->iterator->current();
    }

    /**
     * @return ?TObject
     */
    public function end()
    {
        if ($this->data == null) {
            return null;
        }
        $arrayKeys = array_keys($this->data);
        $lastKey = array_pop($arrayKeys);

        return $this->at($lastKey);
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
     * @return ?TObject
     */
    public function offsetGet($offset)
    {
        return $this->at($offset);
    }

    /**
     * @param int $offset
     * @psalm-param TObject|stdClass $value
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
