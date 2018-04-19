<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class AttributeDateTypeCollectionModel extends AttributeTypeCollectionModel implements AttributeDateTypeCollection
{

    /**
     * @param AttributeDateType $value
     * @return AttributeDateTypeCollection
     */
    public function add($value) {
        if (!$value instanceof AttributeDateType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AttributeDateType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AttributeDateType) {
            $data = $this->mapData(AttributeDateType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
