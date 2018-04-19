<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountSetCustomTypeActionCollectionModel extends CartDiscountUpdateActionCollectionModel implements CartDiscountSetCustomTypeActionCollection
{

    /**
     * @param CartDiscountSetCustomTypeAction $value
     * @return CartDiscountSetCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountSetCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountSetCustomTypeAction) {
            $data = $this->mapData(CartDiscountSetCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
