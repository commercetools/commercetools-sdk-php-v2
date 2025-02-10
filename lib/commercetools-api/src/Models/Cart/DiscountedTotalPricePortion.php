<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountedTotalPricePortion extends JsonObject
{
    public const FIELD_DISCOUNT = 'discount';
    public const FIELD_DISCOUNTED_AMOUNT = 'discountedAmount';

    /**
     * <p>A <a href="ctp:api:type:CartDiscountReference">CartDiscountReference</a> or <a href="ctp:api:type:DirectDiscountReference">DirectDiscountReference</a> to the discount applied on the Cart <code>totalPrice</code>.</p>
     *

     * @return null|Reference
     */
    public function getDiscount();

    /**
     * <p>Money value of the discount.</p>
     *

     * @return null|TypedMoney
     */
    public function getDiscountedAmount();

    /**
     * @param ?Reference $discount
     */
    public function setDiscount(?Reference $discount): void;

    /**
     * @param ?TypedMoney $discountedAmount
     */
    public function setDiscountedAmount(?TypedMoney $discountedAmount): void;
}
