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

     * @return null|int
     */
    public function getQuantity();

    /**

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
