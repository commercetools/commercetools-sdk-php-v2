<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class AttributeTextTypeCollectionModel extends AttributeTypeCollectionModel implements AttributeTextTypeCollection
{

    /**
     * @param AttributeTextType $value
     * @return AttributeTextTypeCollection
     */
    public function add($value) {
        if (!$value instanceof AttributeTextType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AttributeTextType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AttributeTextType) {
            $data = $this->mapData(AttributeTextType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
