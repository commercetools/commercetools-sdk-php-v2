<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class AttributeReferenceTypeCollectionModel extends AttributeTypeCollectionModel implements AttributeReferenceTypeCollection {

    /**
     * @param AttributeReferenceType $value
     * @return AttributeReferenceTypeCollection
     */
    public function add($value) {
        if (!$value instanceof AttributeReferenceType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AttributeReferenceType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AttributeReferenceType) {
            $data = $this->mapData(AttributeReferenceType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
