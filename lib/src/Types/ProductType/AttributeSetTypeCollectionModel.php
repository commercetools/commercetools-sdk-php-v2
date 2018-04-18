<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class AttributeSetTypeCollectionModel extends AttributeTypeCollectionModel implements AttributeSetTypeCollection {

    /**
     * @param AttributeSetType $value
     * @return AttributeSetTypeCollection
     */
    public function add($value) {
        if (!$value instanceof AttributeSetType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AttributeSetType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AttributeSetType) {
            $data = $this->mapData(AttributeSetType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
