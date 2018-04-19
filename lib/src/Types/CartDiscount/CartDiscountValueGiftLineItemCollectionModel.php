<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountValueCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountValueGiftLineItemCollectionModel extends CartDiscountValueCollectionModel implements CartDiscountValueGiftLineItemCollection
{

    /**
     * @param CartDiscountValueGiftLineItem $value
     * @return CartDiscountValueGiftLineItemCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountValueGiftLineItem) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountValueGiftLineItem
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountValueGiftLineItem) {
            $data = $this->mapData(CartDiscountValueGiftLineItem::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
