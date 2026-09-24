<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderSetDirectDiscountsIgnoreCartDiscountsAction extends StagedOrderUpdateAction
{
    public const FIELD_DIRECT_DISCOUNTS_IGNORE_CART_DISCOUNTS = 'directDiscountsIgnoreCartDiscounts';

    /**
     * <ul>
     * <li>If <code>true</code>, only <a href="ctp:api:type:DirectDiscount">Direct Discounts</a> apply to the Order. Matching <a href="ctp:api:type:CartDiscount">Cart Discounts</a> are ignored, and Discount Codes cannot be added.</li>
     * </ul>
     * <p>The value can be set to <code>true</code> only if the Order does not have both <code>discountCodes</code> and <code>directDiscounts</code>.</p>
     * <ul>
     * <li>If <code>false</code>, Cart Discounts, Discount Codes, and Direct Discounts apply to the Order.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getDirectDiscountsIgnoreCartDiscounts();

    /**
     * @param ?bool $directDiscountsIgnoreCartDiscounts
     */
    public function setDirectDiscountsIgnoreCartDiscounts(?bool $directDiscountsIgnoreCartDiscounts): void;
}
