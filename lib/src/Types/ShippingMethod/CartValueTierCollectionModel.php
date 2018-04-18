<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingRatePriceTierCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartValueTierCollectionModel extends ShippingRatePriceTierCollectionModel implements CartValueTierCollection {

    /**
     * @param CartValueTier $value
     * @return CartValueTierCollection
     */
    public function add($value) {
        if (!$value instanceof CartValueTier) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartValueTier
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartValueTier) {
            $data = $this->mapData(CartValueTier::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
