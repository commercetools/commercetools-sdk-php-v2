<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class AttributeLocalizedEnumTypeCollectionModel extends AttributeTypeCollectionModel implements AttributeLocalizedEnumTypeCollection {

    /**
     * @param AttributeLocalizedEnumType $value
     * @return AttributeLocalizedEnumTypeCollection
     */
    public function add($value) {
        if (!$value instanceof AttributeLocalizedEnumType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AttributeLocalizedEnumType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AttributeLocalizedEnumType) {
            $data = $this->mapData(AttributeLocalizedEnumType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
