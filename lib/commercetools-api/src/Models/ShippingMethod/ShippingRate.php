<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingRate extends JsonObject
{
    public const FIELD_PRICE = 'price';
    public const FIELD_FREE_ABOVE = 'freeAbove';
    public const FIELD_IS_MATCHING = 'isMatching';
    public const FIELD_TIERS = 'tiers';

    /**
     * @return null|TypedMoney
     */
    public function getPrice();

    /**
     * <p>The shipping is free if the order total (the sum of line item prices) exceeds the <code>freeAbove</code> value.
     * Note: <code>freeAbove</code> applies before any Cart or Product discounts, and can cause discounts to apply in invalid scenarios.
     * Use a Cart Discount to set the shipping price to 0 to avoid providing free shipping in invalid discount scenarios.</p>
     *
     * @return null|TypedMoney
     */
    public function getFreeAbove();

    /**
     * <p>Only appears in response to requests for shipping methods by cart or location to mark this shipping rate as one that matches the cart or location.</p>
     *
     * @return null|bool
     */
    public function getIsMatching();

    /**
     * <p>A list of shipping rate price tiers.</p>
     *
     * @return null|ShippingRatePriceTierCollection
     */
    public function getTiers();

    /**
     * @param ?TypedMoney $price
     */
    public function setPrice(?TypedMoney $price): void;

    /**
     * @param ?TypedMoney $freeAbove
     */
    public function setFreeAbove(?TypedMoney $freeAbove): void;

    /**
     * @param ?bool $isMatching
     */
    public function setIsMatching(?bool $isMatching): void;

    /**
     * @param ?ShippingRatePriceTierCollection $tiers
     */
    public function setTiers(?ShippingRatePriceTierCollection $tiers): void;
}
