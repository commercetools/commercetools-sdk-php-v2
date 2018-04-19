<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountValueCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountValueAbsoluteCollectionModel extends CartDiscountValueCollectionModel implements CartDiscountValueAbsoluteCollection
{

    /**
     * @param CartDiscountValueAbsolute $value
     * @return CartDiscountValueAbsoluteCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountValueAbsolute) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountValueAbsolute
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountValueAbsolute) {
            $data = $this->mapData(CartDiscountValueAbsolute::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
