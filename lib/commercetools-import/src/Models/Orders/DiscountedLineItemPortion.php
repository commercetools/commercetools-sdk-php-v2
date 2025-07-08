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
     * <p>References a cart discount by key. If the referenced <a href="ctp:api:type:CartDiscount">CartDiscount</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced CartDiscount is created.</p>
     *

     * @return null|CartDiscountKeyReference
     */
    public function getDiscount();

    /**
     * <p>Money value for the discount applicable.</p>
     *

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
