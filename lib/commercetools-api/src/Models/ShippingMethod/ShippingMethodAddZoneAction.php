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
     *

     * @return null|ZoneResourceIdentifier
     */
    public function getZone();

    /**
     * @param ?ZoneResourceIdentifier $zone
     */
    public function setZone(?ZoneResourceIdentifier $zone): void;
}
