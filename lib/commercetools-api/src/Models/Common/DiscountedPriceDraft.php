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
     * <p>Sets the money value for the discounted price.</p>
     *
     * @return null|Money
     */
    public function getValue();

    /**
     * <p>Relates the referenced <a href="ctp:api:type:ProductDiscount">ProductDiscount</a> to the discounted price.</p>
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
