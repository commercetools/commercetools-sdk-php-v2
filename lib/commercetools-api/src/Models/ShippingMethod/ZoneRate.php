<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Zone\ZoneReference;
use Commercetools\Base\JsonObject;

interface ZoneRate extends JsonObject
{
    const FIELD_ZONE = 'zone';
    const FIELD_SHIPPING_RATES = 'shippingRates';

    /**
     * @return null|ZoneReference
     */
    public function getZone();

    /**
     * <p>The array does not contain two shipping rates with the same currency.</p>.
     *
     * @return null|ShippingRateCollection
     */
    public function getShippingRates();

    public function setZone(?ZoneReference $zone): void;

    public function setShippingRates(?ShippingRateCollection $shippingRates): void;
}
