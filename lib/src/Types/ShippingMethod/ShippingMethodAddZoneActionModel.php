<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionModel;

use Commercetools\Types\Zone\ZoneReference;

class ShippingMethodAddZoneActionModel extends ShippingMethodUpdateActionModel implements ShippingMethodAddZoneAction
{
    const DISCRIMINATOR_VALUE = 'addZone';

    /**
     * @var ZoneReference
     */
    protected $zone;

    /**
     * @return ZoneReference
     */
    public function getZone()
    {
        if (is_null($this->zone)) {
            $value = $this->raw(ShippingMethodAddZoneAction::FIELD_ZONE);
            if (is_null($value)) {
                return $this->mapData(ZoneReference::class, null);
            }
            $value = $this->mapData(ZoneReference::class, $value);

            $this->zone = $value;
        }
        return $this->zone;
    }

    /**
     * @param ZoneReference $zone
     * @return $this
     */
    public function setZone(ZoneReference $zone)
    {
        $this->zone = $zone;

        return $this;
    }

}
