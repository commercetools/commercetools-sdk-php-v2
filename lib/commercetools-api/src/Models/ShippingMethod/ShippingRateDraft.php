<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingRateDraft extends JsonObject
{
    public const FIELD_PRICE = 'price';
    public const FIELD_FREE_ABOVE = 'freeAbove';
    public const FIELD_TIERS = 'tiers';

    /**
     * <p>Money value of the ShippingRate.</p>
     *
     * @return null|Money
     */
    public function getPrice();

    /**
     * <p>Shipping is free if the sum of the (Custom) Line Item Prices reaches the specified value.</p>
     *
     * @return null|Money
     */
    public function getFreeAbove();

    /**
     * <p>Price tiers for the ShippingRate.</p>
     *
     * @return null|ShippingRatePriceTierCollection
     */
    public function getTiers();

    /**
     * @param ?Money $price
     */
    public function setPrice(?Money $price): void;

    /**
     * @param ?Money $freeAbove
     */
    public function setFreeAbove(?Money $freeAbove): void;

    /**
     * @param ?ShippingRatePriceTierCollection $tiers
     */
    public function setTiers(?ShippingRatePriceTierCollection $tiers): void;
}
