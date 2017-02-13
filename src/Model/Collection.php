<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

use Zend\Hydrator\HydrationInterface;

class Collection implements \Iterator, \Countable, \JsonSerializable, HydrationInterface
{
    private $rawData;

    /**
     * @var array
     */
    private $keys = array();

    /**
     * @var int
     */
    private $pos = 0;

    private $indexes = [];

    protected $data = [];

    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }
    
    private function initialize(array $data)
    {
        $this->indexes = [];
        $this->pos = 0;
        $this->keys = array_keys($data);
        $this->index($data);
        $this->rawData = $data;
    }

    protected function raw($field)
    {
        if (isset($this->rawData[$field])) {
            return $this->rawData[$field];
        }
        return null;
    }

    protected function rawSet($field, $data)
    {
        if (!is_null($field)) {
            $this->rawData[$field] = $data;
        } else {
            $this->rawData[] = $data;
        }
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * @inheritdoc
     */
    public static function fromArray(array $data)
    {
        return new static($data);
    }

    /**
     * @inheritdoc
     */
    public function toArray()
    {
        return $this->rawData;
    }

    protected function index($data)
    {
    }

    protected function addToIndex($index, $key, $value)
    {
        $this->indexes[$index][$key] = $value;
    }

    protected function valueByKey($index, $key)
    {
        return isset($this->indexes[$index][$key]) ? $this->at($this->indexes[$index][$key]) : null;
    }

    /**
     * @inheritDoc
     */
    public function current()
    {
        if (isset($this->keys[$this->pos])) {
            return $this->at($this->keys[$this->pos]);
        }
        return null;
    }
    
    public function at($index)
    {
        return $this->raw($index);
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        $this->pos++;
    }

    /**
     * @inheritDoc
     */
    public function key()
    {
        if ($this->valid()) {
            return $this->keys[$this->pos];
        }
        return null;
    }

    /**
     * @inheritDoc
     */
    public function valid()
    {
        return isset($this->keys[$this->pos]);
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        $this->pos = 0;
    }

    /**
     * @inheritDoc
     */
    public function count()
    {
        return count($this->keys);
    }
    
    public function hydrate(array $data, $object)
    {
        $object->initialize($data);
    }
}

