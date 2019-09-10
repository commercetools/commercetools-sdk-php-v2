<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Zone\ZoneResourceIdentifier;

interface ZoneRateDraft extends JsonObject
{
    
    const FIELD_ZONE = 'zone';
    const FIELD_SHIPPING_RATES = 'shippingRates';

    /**
     *
     * @return ZoneResourceIdentifier|null
     */
    public function getZone();
    
    /**
     *
     * @return ShippingRateDraftCollection|null
     */
    public function getShippingRates();
    public function setZone(?ZoneResourceIdentifier $zone): void;
    
    public function setShippingRates(?ShippingRateDraftCollection $shippingRates): void;
}