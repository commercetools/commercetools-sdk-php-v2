<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountTargetCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountLineItemsTargetCollectionModel extends CartDiscountTargetCollectionModel implements CartDiscountLineItemsTargetCollection
{

    /**
     * @param CartDiscountLineItemsTarget $value
     * @return CartDiscountLineItemsTargetCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountLineItemsTarget) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountLineItemsTarget
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountLineItemsTarget) {
            $data = $this->mapData(CartDiscountLineItemsTarget::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
