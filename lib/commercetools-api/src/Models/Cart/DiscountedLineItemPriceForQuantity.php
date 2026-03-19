<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountedLineItemPriceForQuantity extends JsonObject
{
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_DISCOUNTED_PRICE = 'discountedPrice';

    /**
     * <p>Number of Line Items or Custom Line Items in the Cart.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>Discounted price of the Line Item or Custom Line Item.</p>
     * <p>When multiple <a href="ctp:api:type:CartDiscount">Cart Discounts</a> apply to the same Line Item, the discounts are applied sequentially in the order determined by their <code>sortOrder</code> values (higher values are applied first). The <a href="ctp:api:type:RoundingMode">price rounding mode</a> specified by the Cart's <code>priceRoundingMode</code> field is applied after each individual discount is calculated, not after all discounts have been applied cumulatively. This means that rounding occurs at each step of the discount calculation process.</p>
     *

     * @return null|DiscountedLineItemPrice
     */
    public function getDiscountedPrice();

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?DiscountedLineItemPrice $discountedPrice
     */
    public function setDiscountedPrice(?DiscountedLineItemPrice $discountedPrice): void;
}
