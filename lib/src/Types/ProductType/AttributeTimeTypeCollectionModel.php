<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class AttributeTimeTypeCollectionModel extends AttributeTypeCollectionModel implements AttributeTimeTypeCollection {

    /**
     * @param AttributeTimeType $value
     * @return AttributeTimeTypeCollection
     */
    public function add($value) {
        if (!$value instanceof AttributeTimeType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AttributeTimeType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AttributeTimeType) {
            $data = $this->mapData(AttributeTimeType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
