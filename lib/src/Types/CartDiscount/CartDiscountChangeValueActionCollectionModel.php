<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountChangeValueActionCollectionModel extends CartDiscountUpdateActionCollectionModel implements CartDiscountChangeValueActionCollection {

    /**
     * @param CartDiscountChangeValueAction $value
     * @return CartDiscountChangeValueActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountChangeValueAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountChangeValueAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountChangeValueAction) {
            $data = $this->mapData(CartDiscountChangeValueAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
