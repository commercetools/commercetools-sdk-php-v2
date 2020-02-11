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
     * @return null|ZoneResourceIdentifier
     */
    public function getZone();

    public function setZone(?ZoneResourceIdentifier $zone): void;
}
