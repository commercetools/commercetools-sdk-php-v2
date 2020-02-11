<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CartDiscount\CartDiscountReference;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountedLineItemPortion extends JsonObject
{
    public const FIELD_DISCOUNT = 'discount';
    public const FIELD_DISCOUNTED_AMOUNT = 'discountedAmount';

    /**
     * @return null|CartDiscountReference
     */
    public function getDiscount();

    /**
     * @return null|TypedMoney
     */
    public function getDiscountedAmount();

    public function setDiscount(?CartDiscountReference $discount): void;

    public function setDiscountedAmount(?TypedMoney $discountedAmount): void;
}
