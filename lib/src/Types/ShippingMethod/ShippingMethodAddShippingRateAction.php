<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\Zone\ZoneReference;

interface ShippingMethodAddShippingRateAction extends ShippingMethodUpdateAction
{
    const FIELD_SHIPPING_RATE = 'shippingRate';
    const FIELD_ZONE = 'zone';

    /**
     * @return ShippingRateDraft
     */
    public function getShippingRate();

    /**
     * @return ZoneReference
     */
    public function getZone();

    /**
     * @param ShippingRateDraft $shippingRate
     * @return $this
     */
    public function setShippingRate(ShippingRateDraft $shippingRate);

    /**
     * @param ZoneReference $zone
     * @return $this
     */
    public function setZone(ZoneReference $zone);

}
