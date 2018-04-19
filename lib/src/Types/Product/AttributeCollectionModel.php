<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class AttributeCollectionModel extends JsonCollection implements AttributeCollection
{

    /**
     * @param Attribute $value
     * @return AttributeCollection
     */
    public function add($value) {
        if (!$value instanceof Attribute) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Attribute
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Attribute) {
            $data = $this->mapData(Attribute::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }

    protected function index($data)
    {
        foreach ($data as $key => $value) {
            if (isset($value['name'])) {
                $this->addToIndex('name', $value['name'], $key);
            }
        }
    }

    /**
     * @param string $name
     * @return Attribute
     */
    public function byName($name)
    {
        return $this->valueByKey('name', $name);
    }


    /**
     * @inheritdoc
     */
    public function offsetGet($offset)
    {
        if (is_string($offset)) {
            return $this->byName($offset);
        }
        return parent::at($offset);
    }

    public function __call(string $method, array $args)
    {
        if (strpos($method, 'get') === 0) {
            $method = lcfirst(substr($method, 3));
        }
        return $this->byName($method);
    }
}
