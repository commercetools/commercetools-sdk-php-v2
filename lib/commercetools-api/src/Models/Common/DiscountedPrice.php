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
