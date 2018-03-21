<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Zone\ZoneReference;

class ZoneRateDraftModel extends JsonObjectModel implements ZoneRateDraft {
    /**
     * @var ZoneReference
     */
    protected $zone;
    /**
     * @var ShippingRateDraftCollection
     */
    protected $shippingRates;

    /**
     * @return ZoneReference
     */
    public function getZone()
    {
        if (is_null($this->zone)) {
            $value = $this->raw(ZoneRateDraft::FIELD_ZONE);
            if (is_null($value)) {
                return $this->mapData(ZoneReference::class, null);
            }
            $value = $this->mapData(ZoneReference::class, $value);

            $this->zone = $value;
        }
        return $this->zone;
    }
    /**
     * @return ShippingRateDraftCollection
     */
    public function getShippingRates()
    {
        if (is_null($this->shippingRates)) {
            $value = $this->raw(ZoneRateDraft::FIELD_SHIPPING_RATES);
            if (is_null($value)) {
                return $this->mapData(ShippingRateDraftCollection::class, null);
            }
            $value = $this->mapData(ShippingRateDraftCollection::class, $value);
            $this->shippingRates = $value;
        }
        return $this->shippingRates;
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
    /**
     * @param ShippingRateDraftCollection $shippingRates
     * @return $this
     */
    public function setShippingRates(ShippingRateDraftCollection $shippingRates)
    {
        $this->shippingRates = $shippingRates;

        return $this;
    }

}
