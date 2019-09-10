<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CartDiscount\CartDiscountReference;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\JsonObject;

interface DiscountedLineItemPortion extends JsonObject
{
    const FIELD_DISCOUNT = 'discount';
    const FIELD_DISCOUNTED_AMOUNT = 'discountedAmount';

    /**
     * @return null|CartDiscountReference
     */
    public function getDiscount();

    /**
     * @return null|Money
     */
    public function getDiscountedAmount();

    public function setDiscount(?CartDiscountReference $discount): void;

    public function setDiscountedAmount(?Money $discountedAmount): void;
}
