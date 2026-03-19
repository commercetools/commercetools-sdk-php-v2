<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountedLineItemPrice extends JsonObject
{
    public const FIELD_VALUE = 'value';
    public const FIELD_INCLUDED_DISCOUNTS = 'includedDiscounts';

    /**
     * <p>Money value of the discounted Line Item or Custom Line Item.</p>
     * <p>When multiple discounts from <code>includedDiscounts</code> apply, they are applied sequentially based on the <code>sortOrder</code> of their associated <a href="ctp:api:type:CartDiscount">Cart Discounts</a> (discounts with higher <code>sortOrder</code> values are applied first). The Cart's <code>priceRoundingMode</code> field (<a href="ctp:api:type:RoundingMode">RoundingMode</a>) is applied after each discount calculation, so rounding occurs after each discount step rather than only once on the final cumulative amount.</p>
     *

     * @return null|TypedMoney
     */
    public function getValue();

    /**
     * <p>Discount applicable on the Line Item or Custom Line Item.</p>
     *

     * @return null|DiscountedLineItemPortionCollection
     */
    public function getIncludedDiscounts();

    /**
     * @param ?TypedMoney $value
     */
    public function setValue(?TypedMoney $value): void;

    /**
     * @param ?DiscountedLineItemPortionCollection $includedDiscounts
     */
    public function setIncludedDiscounts(?DiscountedLineItemPortionCollection $includedDiscounts): void;
}
