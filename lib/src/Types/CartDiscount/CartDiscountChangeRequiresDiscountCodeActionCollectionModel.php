<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\CartDiscount\CartDiscountUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountChangeRequiresDiscountCodeActionCollectionModel extends CartDiscountUpdateActionCollectionModel implements CartDiscountChangeRequiresDiscountCodeActionCollection
{

    /**
     * @param CartDiscountChangeRequiresDiscountCodeAction $value
     * @return CartDiscountChangeRequiresDiscountCodeActionCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountChangeRequiresDiscountCodeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountChangeRequiresDiscountCodeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountChangeRequiresDiscountCodeAction) {
            $data = $this->mapData(CartDiscountChangeRequiresDiscountCodeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
