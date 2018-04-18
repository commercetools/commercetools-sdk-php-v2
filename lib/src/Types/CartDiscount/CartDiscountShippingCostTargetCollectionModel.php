<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountTargetCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountShippingCostTargetCollectionModel extends CartDiscountTargetCollectionModel implements CartDiscountShippingCostTargetCollection {

    /**
     * @param CartDiscountShippingCostTarget $value
     * @return CartDiscountShippingCostTargetCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountShippingCostTarget) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountShippingCostTarget
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountShippingCostTarget) {
            $data = $this->mapData(CartDiscountShippingCostTarget::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
