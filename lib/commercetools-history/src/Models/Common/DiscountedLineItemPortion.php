<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface DiscountedLineItemPortion extends JsonObject
{

    public const FIELD_DISCOUNT = 'discount';
    public const FIELD_DISCOUNTED_AMOUNT = 'discountedAmount';

    /**

     * @return null|Reference
     */
    public function getDiscount();

    /**

     * @return null|Money
     */
    public function getDiscountedAmount();

    /**
     * @param ?Reference $discount
     */
    public function setDiscount(?Reference $discount): void;

    /**
     * @param ?Money $discountedAmount
     */
    public function setDiscountedAmount(?Money $discountedAmount): void;
}
