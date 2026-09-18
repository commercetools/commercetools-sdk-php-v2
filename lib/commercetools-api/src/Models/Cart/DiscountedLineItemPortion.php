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

interface DiscountedLineItemPortion extends JsonObject
{
    public const FIELD_DISCOUNT = 'discount';
    public const FIELD_DISCOUNTED_AMOUNT = 'discountedAmount';

    /**
     * <p>A <a href="ctp:api:type:CartDiscountReference">CartDiscountReference</a> or <a href="ctp:api:type:DirectDiscountReference">DirectDiscountReference</a> of the applicable discount on the Line Item.</p>
     *

     * @return null|Reference
     */
    public function getDiscount();

    /**
     * <p>Money value of the applicable discount.</p>
     * <p>When a Cart Discount with <a href="ctp:api:type:CartDiscountPatternTarget">CartDiscountPatternTarget</a> is used:</p>
     * <ul>
     * <li>The value is zero for a (Custom) Line Item matching the <code>triggerPattern</code>, indicating it participated in the discount as a trigger.</li>
     * <li>The value is the actual discount amount for a (Custom) Line Item matching the <code>targetPattern</code>.</li>
     * </ul>
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
