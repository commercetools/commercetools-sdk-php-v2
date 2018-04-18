<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountChangeCartPredicateActionCollectionModel extends CartDiscountUpdateActionCollectionModel implements CartDiscountChangeCartPredicateActionCollection {

    /**
     * @param CartDiscountChangeCartPredicateAction $value
     * @return CartDiscountChangeCartPredicateActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountChangeCartPredicateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountChangeCartPredicateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountChangeCartPredicateAction) {
            $data = $this->mapData(CartDiscountChangeCartPredicateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
