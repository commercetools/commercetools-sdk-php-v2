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
     * <p>Base polymorphic read-only Money type which is stored in cent precision or high precision. The actual type is determined by the <code>type</code> field.</p>
     *
     * @return null|TypedMoney
     */
    public function getValue();

    /**
     * <p><a href="/../api/types#reference">Reference</a> to a <a href="ctp:api:type:ProductDiscount">ProductDiscount</a>.</p>
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
