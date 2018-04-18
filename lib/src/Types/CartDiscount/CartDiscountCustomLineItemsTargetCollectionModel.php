<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountTargetCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountCustomLineItemsTargetCollectionModel extends CartDiscountTargetCollectionModel implements CartDiscountCustomLineItemsTargetCollection {

    /**
     * @param CartDiscountCustomLineItemsTarget $value
     * @return CartDiscountCustomLineItemsTargetCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountCustomLineItemsTarget) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountCustomLineItemsTarget
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountCustomLineItemsTarget) {
            $data = $this->mapData(CartDiscountCustomLineItemsTarget::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
