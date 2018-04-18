<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountValueCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountValueRelativeCollectionModel extends CartDiscountValueCollectionModel implements CartDiscountValueRelativeCollection {

    /**
     * @param CartDiscountValueRelative $value
     * @return CartDiscountValueRelativeCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountValueRelative) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountValueRelative
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountValueRelative) {
            $data = $this->mapData(CartDiscountValueRelative::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
