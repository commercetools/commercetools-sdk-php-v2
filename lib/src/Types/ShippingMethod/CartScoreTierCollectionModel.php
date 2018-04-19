<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingRatePriceTierCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartScoreTierCollectionModel extends ShippingRatePriceTierCollectionModel implements CartScoreTierCollection
{

    /**
     * @param CartScoreTier $value
     * @return CartScoreTierCollection
     */
    public function add($value) {
        if (!$value instanceof CartScoreTier) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartScoreTier
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartScoreTier) {
            $data = $this->mapData(CartScoreTier::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
