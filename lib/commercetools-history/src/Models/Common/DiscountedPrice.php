<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface DiscountedPrice extends JsonObject
{

    public const FIELD_VALUE = 'value';
    public const FIELD_DISCOUNT = 'discount';

    /**
     * <p>Money value of the discounted price.</p>
     * <ul>
     * <li>When a <a href="ctp:api:type:ProductDiscountValueRelative">relative Product Discount</a> applies and the fractional part of the resulting discounted price is 0.5, the discounted price is <a href="https://en.wikipedia.org/wiki/Rounding#Rounding_half_down">rounded half down</a>.</li>
     * <li>When an <a href="ctp:api:type:ProductDiscountValueAbsolute">absolute Product Discount</a> exceeds the price of the Product Variant, the resulting discounted price is set to <code>0</code>.</li>
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
