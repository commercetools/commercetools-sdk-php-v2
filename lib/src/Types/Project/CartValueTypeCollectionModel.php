<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ShippingRateInputTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartValueTypeCollectionModel extends ShippingRateInputTypeCollectionModel implements CartValueTypeCollection {

    /**
     * @param CartValueType $value
     * @return CartValueTypeCollection
     */
    public function add($value) {
        if (!$value instanceof CartValueType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartValueType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartValueType) {
            $data = $this->mapData(CartValueType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
