<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CartDiscountChangeCartPredicateAction extends CartDiscountUpdateAction
{

    public const FIELD_CART_PREDICATE = 'cartPredicate';

    /**
     * <p>A valid Cart predicate.</p>
     *
     * @return null|string
     */
    public function getCartPredicate();

    public function setCartPredicate(?string $cartPredicate): void;
}
