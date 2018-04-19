<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Zone\ZoneReference;

interface ZoneRate extends JsonObject
{
    const FIELD_ZONE = 'zone';
    const FIELD_SHIPPING_RATES = 'shippingRates';

    /**
     * @return ZoneReference
     */
    public function getZone();

    /**
     * @return ShippingRateCollection
     */
    public function getShippingRates();

    /**
     * @param ZoneReference $zone
     * @return $this
     */
    public function setZone(ZoneReference $zone);

    /**
     * @param ShippingRateCollection $shippingRates
     * @return $this
     */
    public function setShippingRates(ShippingRateCollection $shippingRates);

}
