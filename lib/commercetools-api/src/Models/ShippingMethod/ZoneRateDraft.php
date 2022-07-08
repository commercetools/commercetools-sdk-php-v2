<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Zone\ZoneResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ZoneRateDraft extends JsonObject
{
    public const FIELD_ZONE = 'zone';
    public const FIELD_SHIPPING_RATES = 'shippingRates';

    /**
     * <p>Sets the <a href="ctp:api:type:Zone">Zone</a> for which the shippng rates are valid.</p>
     *
     * @return null|ZoneResourceIdentifier
     */
    public function getZone();

    /**
     * <p>Shipping rates for the <code>currencies</code> configured in the <a href="ctp:api:type:Project">Project</a>. The array must not contain two ShippingRates with the same <a href="ctp:api:type:CurrencyCode">CurrencyCode</a>.</p>
     *
     * @return null|ShippingRateDraftCollection
     */
    public function getShippingRates();

    /**
     * @param ?ZoneResourceIdentifier $zone
     */
    public function setZone(?ZoneResourceIdentifier $zone): void;

    /**
     * @param ?ShippingRateDraftCollection $shippingRates
     */
    public function setShippingRates(?ShippingRateDraftCollection $shippingRates): void;
}
