<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

interface DiscountCodeSetCartPredicateAction extends DiscountCodeUpdateAction {
    const FIELD_CART_PREDICATE = 'cartPredicate';

    /**
     * @return string
     */
    public function getCartPredicate();

    /**
     * @param string $cartPredicate
     * @return $this
     */
    public function setCartPredicate(string $cartPredicate);

}
