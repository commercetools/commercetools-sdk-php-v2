<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Zone\ZoneReference;

interface ZoneRate extends JsonObject
{
    
    const FIELD_ZONE = 'zone';
    const FIELD_SHIPPING_RATES = 'shippingRates';

    /**
     *
     * @return ZoneReference|null
     */
    public function getZone();
    
    /**
     *
     * @return ShippingRateCollection|null
     */
    public function getShippingRates();
    public function setZone(?ZoneReference $zone): void;
    
    public function setShippingRates(?ShippingRateCollection $shippingRates): void;
}