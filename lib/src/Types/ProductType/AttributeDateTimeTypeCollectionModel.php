<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class AttributeDateTimeTypeCollectionModel extends AttributeTypeCollectionModel implements AttributeDateTimeTypeCollection
{

    /**
     * @param AttributeDateTimeType $value
     * @return AttributeDateTimeTypeCollection
     */
    public function add($value) {
        if (!$value instanceof AttributeDateTimeType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AttributeDateTimeType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AttributeDateTimeType) {
            $data = $this->mapData(AttributeDateTimeType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
