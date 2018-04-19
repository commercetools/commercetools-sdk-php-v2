<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Zone\ZoneReference;

class ZoneRateModel extends JsonObjectModel implements ZoneRate
{
    /**
     * @var ZoneReference
     */
    protected $zone;
    /**
     * @var ShippingRateCollection
     */
    protected $shippingRates;

    /**
     * @return ZoneReference
     */
    public function getZone()
    {
        if (is_null($this->zone)) {
            $value = $this->raw(ZoneRate::FIELD_ZONE);
            if (is_null($value)) {
                return $this->mapData(ZoneReference::class, null);
            }
            $value = $this->mapData(ZoneReference::class, $value);

            $this->zone = $value;
        }
        return $this->zone;
    }
    /**
     * @return ShippingRateCollection
     */
    public function getShippingRates()
    {
        if (is_null($this->shippingRates)) {
            $value = $this->raw(ZoneRate::FIELD_SHIPPING_RATES);
            if (is_null($value)) {
                return $this->mapData(ShippingRateCollection::class, null);
            }
            $value = $this->mapData(ShippingRateCollection::class, $value);
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
     * @param ShippingRateCollection $shippingRates
     * @return $this
     */
    public function setShippingRates(ShippingRateCollection $shippingRates)
    {
        $this->shippingRates = $shippingRates;

        return $this;
    }

}
