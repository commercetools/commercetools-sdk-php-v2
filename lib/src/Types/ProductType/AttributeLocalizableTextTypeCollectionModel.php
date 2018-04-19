<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class AttributeLocalizableTextTypeCollectionModel extends AttributeTypeCollectionModel implements AttributeLocalizableTextTypeCollection
{

    /**
     * @param AttributeLocalizableTextType $value
     * @return AttributeLocalizableTextTypeCollection
     */
    public function add($value) {
        if (!$value instanceof AttributeLocalizableTextType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AttributeLocalizableTextType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AttributeLocalizableTextType) {
            $data = $this->mapData(AttributeLocalizableTextType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
