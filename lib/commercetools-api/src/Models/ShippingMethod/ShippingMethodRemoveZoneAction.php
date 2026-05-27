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

interface ShippingMethodRemoveZoneAction extends ShippingMethodUpdateAction
{
    public const FIELD_ZONE = 'zone';

    /**
     * <p>Value to remove from <code>zoneRates</code>.</p>
     * <p>Removes the entire <a href="ctp:api:type:ZoneRate">ZoneRate</a> entry for the specified <a href="ctp:api:type:Zone">Zone</a> from the <code>zoneRates</code> array. This action deletes both the Zone reference and all <a href="ctp:api:type:ShippingRate">ShippingRates</a> associated with that Zone.</p>
     *

     * @return null|ZoneResourceIdentifier
     */
    public function getZone();

    /**
     * @param ?ZoneResourceIdentifier $zone
     */
    public function setZone(?ZoneResourceIdentifier $zone): void;
}
