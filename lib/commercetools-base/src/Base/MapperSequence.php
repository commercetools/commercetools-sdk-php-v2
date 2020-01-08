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
abstract class MapperSequence implements Collection, \ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    /** @psalm-var ?array<int, TObject|stdClass> */
    private $data;
    /** @var array<string, array<string, int>> */
    private $indexes = [];
    /** @var MapperIterator */
    private $iterator;

    /**
     * @psalm-param ?array<int, TObject|stdClass> $data
     */
    public function __construct(array $data = null)
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
     * @psalm-param array<int, T|stdClass> $data
     *
     * @return static
     */
    final public static function fromArray(array $data)
    {
        return new static($data);
    }

    /**
     * @psalm-param TObject|stdClass $value
     *
     * @param $value
     *
     * @return Collection
     */
    public function add($value)
    {
        return $this->store($value);
    }

    /**
     * @psalm-return ?TObject
     */
    public function at(int $index)
    {
        return $this->mapper()($index);
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
        /** @psalm-var ?TObject $current  */
        return $this->iterator->current();
    }

    public function next()
    {
        $this->iterator->next();
    }

    /**
     * @return int
     */
    public function key()
    {
        /** @var int $key */
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
     * @param int $offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return !is_null($this->data) && array_key_exists($offset, $this->data);
    }

    /**
     * @param int $offset
     *
     * @return ?TObject
     */
    public function offsetGet($offset)
    {
        return $this->at($offset);
    }

    /**
     * @param int $offset
     * @psalm-param TObject|stdClass $value
     *
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->set($value, $offset);
        $this->iterator = $this->getIterator();
    }

    /**
     * @param int $offset
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
     * @psalm-return TObject|stdClass|null
     */
    final protected function get(int $index)
    {
        if (isset($this->data[$index])) {
            return $this->data[$index];
        }

        return null;
    }

    /**
     * @psalm-param TObject|stdClass $data
     *
     * @param mixed $data
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
     *
     * @param $value
     *
     * @return Collection
     */
    final protected function store($value)
    {
        $this->set($value, null);
        $this->iterator = $this->getIterator();

        return $this;
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
}
