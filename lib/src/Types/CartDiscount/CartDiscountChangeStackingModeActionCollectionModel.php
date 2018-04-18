<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountChangeStackingModeActionCollectionModel extends CartDiscountUpdateActionCollectionModel implements CartDiscountChangeStackingModeActionCollection {

    /**
     * @param CartDiscountChangeStackingModeAction $value
     * @return CartDiscountChangeStackingModeActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountChangeStackingModeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountChangeStackingModeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountChangeStackingModeAction) {
            $data = $this->mapData(CartDiscountChangeStackingModeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
