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
 * @implements CMap<TObject>
 */
abstract class MapperMap implements CMap
{
    /** @psalm-var ?array<string, TObject|stdClass> */
    private $data;
    /** @psalm-var array<string, array<string, string>> */
    private $indexes = [];
    /** @psalm-var MapperIterator */
    private $iterator;

    /**
     * @psalm-param ?array<string, TObject|stdClass> $data
     * @param array|null $data
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
     * @template T
     * @psalm-param ?stdClass|array<string, T|stdClass> $data
     * @return static
     */
    final public static function of($data = null)
    {
        if (is_array($data)) {
            return self::fromArray($data);
        }
        /** @psalm-var stdClass $data) */
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
        /** @psalm-var array<string, TObject|stdClass> $t */
        $t = (array)$data;
        return new static($t);
    }

    /**
     * @template T
     * @psalm-param array<string, T|stdClass> $data
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
    final protected function get(string $key)
    {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }
        return null;
    }

    /**
     * @psalm-param TObject|stdClass $data
     */
    final protected function set($data, string $key): void
    {
        $this->data[$key] = $data;
    }

    /**
     * @psalm-param TObject|stdClass $value
     * @param $value
     * @return $this
     */
    public function put(string $key, $value)
    {
        return $this->store($key, $value);
    }

    /**
     * @psalm-param TObject|stdClass $value
     * @param string $key
     * @param $value
     * @return $this
     */
    final protected function store(string $key, $value)
    {
        $this->set($value, $key);
        $this->iterator = $this->getIterator();

        return $this;
    }

    /**
     * @psalm-return ?TObject
     */
    public function at(string $key)
    {
        return $this->mapper()($key);
    }

    /**
     * @return ?TObject|mixed
     */
    public function with(string $key, callable $callback = null)
    {
        $data = $this->at($key);
        if (is_null($callback)) {
            return $data;
        }

        return $callback($data);
    }

    /**
     * @psalm-return callable(string): ?TObject
     */
    abstract protected function mapper();

    /**
     * @psalm-param TObject|stdClass $value
     */
    final protected function addToIndex(string $field, string $key, string $indexKey): void
    {
        $this->indexes[$field][$key] = $indexKey;
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
     * @return void
     */
    public function next()
    {
        $this->iterator->next();
    }

    /**
     * @return string
     */
    public function key()
    {
        /** @psalm-var string */
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
     * @param string $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return !is_null($this->data) && array_key_exists($offset, $this->data);
    }

    /**
     * @param string $offset
     * @return ?TObject
     */
    public function offsetGet($offset)
    {
        return $this->at($offset);
    }

    /**
     * @param string $offset
     * @psalm-param TObject|stdClass $value
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->store($offset, $value);
    }

    /**
     * @param string $offset
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
}
