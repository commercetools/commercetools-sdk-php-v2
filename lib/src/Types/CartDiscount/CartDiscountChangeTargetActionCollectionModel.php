<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountChangeTargetActionCollectionModel extends CartDiscountUpdateActionCollectionModel implements CartDiscountChangeTargetActionCollection
{

    /**
     * @param CartDiscountChangeTargetAction $value
     * @return CartDiscountChangeTargetActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountChangeTargetAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountChangeTargetAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountChangeTargetAction) {
            $data = $this->mapData(CartDiscountChangeTargetAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
