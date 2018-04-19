<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class AttributeEnumTypeCollectionModel extends AttributeTypeCollectionModel implements AttributeEnumTypeCollection
{

    /**
     * @param AttributeEnumType $value
     * @return AttributeEnumTypeCollection
     */
    public function add($value) {
        if (!$value instanceof AttributeEnumType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AttributeEnumType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AttributeEnumType) {
            $data = $this->mapData(AttributeEnumType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
