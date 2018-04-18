<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingRatePriceTierCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartClassificationTierCollectionModel extends ShippingRatePriceTierCollectionModel implements CartClassificationTierCollection {

    /**
     * @param CartClassificationTier $value
     * @return CartClassificationTierCollection
     */
    public function add($value) {
        if (!$value instanceof CartClassificationTier) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartClassificationTier
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartClassificationTier) {
            $data = $this->mapData(CartClassificationTier::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
