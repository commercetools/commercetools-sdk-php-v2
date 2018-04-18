<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class AttributeNestedTypeCollectionModel extends AttributeTypeCollectionModel implements AttributeNestedTypeCollection {

    /**
     * @param AttributeNestedType $value
     * @return AttributeNestedTypeCollection
     */
    public function add($value) {
        if (!$value instanceof AttributeNestedType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AttributeNestedType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AttributeNestedType) {
            $data = $this->mapData(AttributeNestedType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
