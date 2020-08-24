<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\CartDiscountKeyReference;
use Commercetools\Import\Models\Common\Money;

interface DiscountedLineItemPortion extends JsonObject
{
    public const FIELD_DISCOUNT = 'discount';
    public const FIELD_DISCOUNTED_AMOUNT = 'discountedAmount';

    /**
     * <p>References a cart discount by its key.</p>
     *
     * @return null|CartDiscountKeyReference
     */
    public function getDiscount();

    /**
     * @return null|Money
     */
    public function getDiscountedAmount();

    /**
     * @param ?CartDiscountKeyReference $discount
     */
    public function setDiscount(?CartDiscountKeyReference $discount): void;

    /**
     * @param ?Money $discountedAmount
     */
    public function setDiscountedAmount(?Money $discountedAmount): void;
}
