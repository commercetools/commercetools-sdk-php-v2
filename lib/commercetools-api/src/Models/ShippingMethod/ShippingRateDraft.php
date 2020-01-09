<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\JsonObject;

interface ShippingRateDraft extends JsonObject
{
    const FIELD_PRICE = 'price';
    const FIELD_FREE_ABOVE = 'freeAbove';
    const FIELD_TIERS = 'tiers';

    /**
     * @return null|Money
     */
    public function getPrice();

    /**
     * <p>The shipping is free if the order total (the sum of line item prices) exceeds the freeAbove value.
     * Note: <code>freeAbove</code> applies before any Cart or Product discounts, and can cause discounts to apply in invalid scenarios.
     * Use a Cart Discount to set the shipping price to 0 to avoid providing free shipping in invalid discount scenarios.</p>
     *
     * @return null|Money
     */
    public function getFreeAbove();

    /**
     * <p>A list of shipping rate price tiers.</p>
     *
     * @return null|ShippingRatePriceTierCollection
     */
    public function getTiers();

    public function setPrice(?Money $price): void;

    public function setFreeAbove(?Money $freeAbove): void;

    public function setTiers(?ShippingRatePriceTierCollection $tiers): void;
}
