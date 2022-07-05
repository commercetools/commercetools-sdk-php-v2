<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountChangeCartPredicateAction extends CartDiscountUpdateAction
{
    public const FIELD_CART_PREDICATE = 'cartPredicate';

    /**
     * <p>New value to set.</p>
     *

     * @return null|string
     */
    public function getCartPredicate();

    /**
     * @param ?string $cartPredicate
     */
    public function setCartPredicate(?string $cartPredicate): void;
}
