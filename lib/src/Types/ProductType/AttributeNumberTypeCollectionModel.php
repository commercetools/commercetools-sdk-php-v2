<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class AttributeNumberTypeCollectionModel extends AttributeTypeCollectionModel implements AttributeNumberTypeCollection {

    /**
     * @param AttributeNumberType $value
     * @return AttributeNumberTypeCollection
     */
    public function add($value) {
        if (!$value instanceof AttributeNumberType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AttributeNumberType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AttributeNumberType) {
            $data = $this->mapData(AttributeNumberType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
