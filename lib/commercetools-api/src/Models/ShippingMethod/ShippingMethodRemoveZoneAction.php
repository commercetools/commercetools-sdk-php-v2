<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Zone\ZoneResourceIdentifier;

interface ShippingMethodRemoveZoneAction extends ShippingMethodUpdateAction
{
    
    const FIELD_ZONE = 'zone';

    /**
     *
     * @return ZoneResourceIdentifier|null
     */
    public function getZone();
    public function setZone(?ZoneResourceIdentifier $zone): void;
}