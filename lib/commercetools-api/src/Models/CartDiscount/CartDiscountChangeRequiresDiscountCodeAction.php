<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CartDiscountChangeRequiresDiscountCodeAction extends CartDiscountUpdateAction
{

    public const FIELD_REQUIRES_DISCOUNT_CODE = 'requiresDiscountCode';

    /**
     * @return null|bool
     */
    public function getRequiresDiscountCode();

    public function setRequiresDiscountCode(?bool $requiresDiscountCode): void;
}
