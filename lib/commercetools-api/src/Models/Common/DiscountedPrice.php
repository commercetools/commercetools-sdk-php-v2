<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\ProductDiscount\ProductDiscountReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountedPrice extends JsonObject
{
    public const FIELD_VALUE = 'value';
    public const FIELD_DISCOUNT = 'discount';

    /**
     * <p>Money value of the discounted price.</p>
     * <ul>
     * <li>
     * <p>When a <a href="ctp:api:type:ProductDiscountValueRelative">relative Product Discount</a> applies and the fractional part of the resulting discounted price is 0.5, the discounted price is <a href="https://en.wikipedia.org/wiki/Rounding#Rounding_half_down">rounded half down</a>.</p>
     * <p>For example, a price of €1.01 (<code>centAmount: 101</code>) with a 50% discount (<code>permyriad: 5000</code>) calculates to €0.505. Since the fractional half-cent is exactly 0.5, it rounds down to €0.50 (<code>centAmount: 50</code>).</p>
     * </li>
     * <li>
     * <p>When an <a href="ctp:api:type:ProductDiscountValueAbsolute">absolute Product Discount</a> exceeds the price of the Product Variant, the resulting discounted price is set to <code>0</code>.</p>
     * </li>
     * </ul>
     *

     * @return null|TypedMoney
     */
    public function getValue();

    /**
     * <p><a href="ctp:api:type:ProductDiscount">ProductDiscount</a> related to the discounted price.</p>
     *

     * @return null|ProductDiscountReference
     */
    public function getDiscount();

    /**
     * @param ?TypedMoney $value
     */
    public function setValue(?TypedMoney $value): void;

    /**
     * @param ?ProductDiscountReference $discount
     */
    public function setDiscount(?ProductDiscountReference $discount): void;
}
