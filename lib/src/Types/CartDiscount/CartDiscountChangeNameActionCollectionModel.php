<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountChangeNameActionCollectionModel extends CartDiscountUpdateActionCollectionModel implements CartDiscountChangeNameActionCollection
{

    /**
     * @param CartDiscountChangeNameAction $value
     * @return CartDiscountChangeNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountChangeNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountChangeNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountChangeNameAction) {
            $data = $this->mapData(CartDiscountChangeNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
