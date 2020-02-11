<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountCodeSetCartPredicateAction extends DiscountCodeUpdateAction
{
    public const FIELD_CART_PREDICATE = 'cartPredicate';

    /**
     * <p>If the <code>cartPredicate</code> parameter is not included, the field will be emptied.</p>
     *
     * @return null|string
     */
    public function getCartPredicate();

    public function setCartPredicate(?string $cartPredicate): void;
}
