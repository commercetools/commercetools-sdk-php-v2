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

interface DiscountedPriceDraft extends JsonObject
{
    public const FIELD_VALUE = 'value';
    public const FIELD_DISCOUNT = 'discount';

    /**
     * <p>Draft type that stores amounts in cent precision for the specified currency.
     * For storing money values in fractions of the minor unit in a currency, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a> instead.</p>
     *
     * @return null|Money
     */
    public function getValue();

    /**
     * <p><a href="/../api/types#reference">Reference</a> to a <a href="ctp:api:type:ProductDiscount">ProductDiscount</a>.</p>
     *
     * @return null|ProductDiscountReference
     */
    public function getDiscount();

    /**
     * @param ?Money $value
     */
    public function setValue(?Money $value): void;

    /**
     * @param ?ProductDiscountReference $discount
     */
    public function setDiscount(?ProductDiscountReference $discount): void;
}
