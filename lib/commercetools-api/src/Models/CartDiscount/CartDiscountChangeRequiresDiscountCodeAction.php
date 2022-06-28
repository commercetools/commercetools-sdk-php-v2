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
     * <p>New value to set.
     * If set to <code>true</code>, the Discount can only be used in connection with a <a href="ctp:api:type:DiscountCode">DiscountCode</a>.</p>
     *
     * @return null|bool
     */
    public function getRequiresDiscountCode();

    /**
     * @param ?bool $requiresDiscountCode
     */
    public function setRequiresDiscountCode(?bool $requiresDiscountCode): void;
}
