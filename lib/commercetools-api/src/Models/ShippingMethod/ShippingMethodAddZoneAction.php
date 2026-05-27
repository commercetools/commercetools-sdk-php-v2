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

interface ShippingMethodAddZoneAction extends ShippingMethodUpdateAction
{
    public const FIELD_ZONE = 'zone';

    /**
     * <p>Value to add to <code>zoneRates</code>.</p>
     * <p>Adds a new <a href="ctp:api:type:ZoneRate">ZoneRate</a> entry to the <code>zoneRates</code> array with the specified <a href="ctp:api:type:Zone">Zone</a> and an empty <code>shippingRates</code> array. After adding the Zone, you can add <a href="ctp:api:type:ShippingRate">ShippingRates</a> for this Zone using the <a href="ctp:api:type:ShippingMethodAddShippingRateAction">Add ShippingRate</a> update action.</p>
     *

     * @return null|ZoneResourceIdentifier
     */
    public function getZone();

    /**
     * @param ?ZoneResourceIdentifier $zone
     */
    public function setZone(?ZoneResourceIdentifier $zone): void;
}
