<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Zone\ZoneResourceIdentifier;

interface ShippingMethodAddShippingRateAction extends ShippingMethodUpdateAction
{
    
    const FIELD_ZONE = 'zone';
    const FIELD_SHIPPING_RATE = 'shippingRate';

    /**
     *
     * @return ZoneResourceIdentifier|null
     */
    public function getZone();
    
    /**
     *
     * @return ShippingRateDraft|null
     */
    public function getShippingRate();
    public function setZone(?ZoneResourceIdentifier $zone): void;
    
    public function setShippingRate(?ShippingRateDraft $shippingRate): void;
}