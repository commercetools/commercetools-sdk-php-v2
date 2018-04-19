<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\CartDiscount\CartDiscountUpdateActionModel;

class CartDiscountChangeCartPredicateActionModel extends CartDiscountUpdateActionModel implements CartDiscountChangeCartPredicateAction
{
    const DISCRIMINATOR_VALUE = 'changeCartPredicate';

    /**
     * @var string
     */
    protected $cartPredicate;

    /**
     * @return string
     */
    public function getCartPredicate()
    {
        if (is_null($this->cartPredicate)) {
            $value = $this->raw(CartDiscountChangeCartPredicateAction::FIELD_CART_PREDICATE);
            $value = (string)$value;
            $this->cartPredicate = $value;
        }
        return $this->cartPredicate;
    }

    /**
     * @param string $cartPredicate
     * @return $this
     */
    public function setCartPredicate(string $cartPredicate)
    {
        $this->cartPredicate = (string)$cartPredicate;

        return $this;
    }

}
