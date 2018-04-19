<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\Zone\ZoneReference;

interface ShippingMethodRemoveZoneAction extends ShippingMethodUpdateAction
{
    const FIELD_ZONE = 'zone';

    /**
     * @return ZoneReference
     */
    public function getZone();

    /**
     * @param ZoneReference $zone
     * @return $this
     */
    public function setZone(ZoneReference $zone);

}
