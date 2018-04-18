<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class AttributeMoneyTypeCollectionModel extends AttributeTypeCollectionModel implements AttributeMoneyTypeCollection {

    /**
     * @param AttributeMoneyType $value
     * @return AttributeMoneyTypeCollection
     */
    public function add($value) {
        if (!$value instanceof AttributeMoneyType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AttributeMoneyType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AttributeMoneyType) {
            $data = $this->mapData(AttributeMoneyType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
