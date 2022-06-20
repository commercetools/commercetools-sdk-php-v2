<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Zone\ZoneReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ZoneRate extends JsonObject
{
    public const FIELD_ZONE = 'zone';
    public const FIELD_SHIPPING_RATES = 'shippingRates';

    /**
     * <p><a href="ctp:api:type:Zone">Zone</a> for which the shipping rates are valid.</p>
     *
     * @return null|ZoneReference
     */
    public function getZone();

    /**
     * <p>Shipping rates defined per currency.</p>
     *
     * @return null|ShippingRateCollection
     */
    public function getShippingRates();

    /**
     * @param ?ZoneReference $zone
     */
    public function setZone(?ZoneReference $zone): void;

    /**
     * @param ?ShippingRateCollection $shippingRates
     */
    public function setShippingRates(?ShippingRateCollection $shippingRates): void;
}
