<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class AttributeBooleanTypeCollectionModel extends AttributeTypeCollectionModel implements AttributeBooleanTypeCollection
{

    /**
     * @param AttributeBooleanType $value
     * @return AttributeBooleanTypeCollection
     */
    public function add($value) {
        if (!$value instanceof AttributeBooleanType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AttributeBooleanType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AttributeBooleanType) {
            $data = $this->mapData(AttributeBooleanType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
