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

interface DiscountedTotalPricePortion extends JsonObject
{
    public const FIELD_DISCOUNT = 'discount';
    public const FIELD_DISCOUNTED_AMOUNT = 'discountedAmount';

    /**
     * <p>Cart Discount related to the discounted price.</p>
     *

     * @return null|CartDiscountReference
     */
    public function getDiscount();

    /**
     * <p>Money value of the discount.</p>
     *

     * @return null|TypedMoney
     */
    public function getDiscountedAmount();

    /**
     * @param ?CartDiscountReference $discount
     */
    public function setDiscount(?CartDiscountReference $discount): void;

    /**
     * @param ?TypedMoney $discountedAmount
     */
    public function setDiscountedAmount(?TypedMoney $discountedAmount): void;
}
