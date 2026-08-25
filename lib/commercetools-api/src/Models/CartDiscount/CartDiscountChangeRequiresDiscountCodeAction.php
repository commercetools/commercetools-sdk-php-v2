<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountChangeRequiresDiscountCodeAction extends CartDiscountUpdateAction
{
    public const FIELD_REQUIRES_DISCOUNT_CODE = 'requiresDiscountCode';

    /**
     * <p>New value to set. If <code>true</code>, the Cart Discount can only be used with a <a href="ctp:api:type:DiscountCode">DiscountCode</a>.</p>
     * <p>When set to <code>false</code>, if the number of active Cart Discounts without a Discount Code exceeds the <a href="/api/limits#cart-discounts">limit</a>, a <a href="ctp:api:type:MaxCartDiscountsReachedError">MaxCartDiscountsReached</a> error is returned.</p>
     *

     * @return null|bool
     */
    public function getRequiresDiscountCode();

    /**
     * @param ?bool $requiresDiscountCode
     */
    public function setRequiresDiscountCode(?bool $requiresDiscountCode): void;
}
