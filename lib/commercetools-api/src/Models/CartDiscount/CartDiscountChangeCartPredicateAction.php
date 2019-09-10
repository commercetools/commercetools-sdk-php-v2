<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

interface CartDiscountChangeCartPredicateAction extends CartDiscountUpdateAction
{
    const FIELD_CART_PREDICATE = 'cartPredicate';

    /**
     * @return null|string
     */
    public function getCartPredicate();

    public function setCartPredicate(?string $cartPredicate): void;
}
