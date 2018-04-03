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

class ShippingMethodRemoveShippingRateActionModel extends ShippingMethodUpdateActionModel implements ShippingMethodRemoveShippingRateAction {
    const DISCRIMINATOR_VALUE = 'removeShippingRate';

    /**
     * @var ShippingRateDraft
     */
    protected $shippingRate;
    /**
     * @var ZoneReference
     */
    protected $zone;

    /**
     * @return ShippingRateDraft
     */
    public function getShippingRate()
    {
        if (is_null($this->shippingRate)) {
            $value = $this->raw(ShippingMethodRemoveShippingRateAction::FIELD_SHIPPING_RATE);
            if (is_null($value)) {
                return $this->mapData(ShippingRateDraft::class, null);
            }
            $value = $this->mapData(ShippingRateDraft::class, $value);

            $this->shippingRate = $value;
        }
        return $this->shippingRate;
    }
    /**
     * @return ZoneReference
     */
    public function getZone()
    {
        if (is_null($this->zone)) {
            $value = $this->raw(ShippingMethodRemoveShippingRateAction::FIELD_ZONE);
            if (is_null($value)) {
                return $this->mapData(ZoneReference::class, null);
            }
            $value = $this->mapData(ZoneReference::class, $value);

            $this->zone = $value;
        }
        return $this->zone;
    }

    /**
     * @param ShippingRateDraft $shippingRate
     * @return $this
     */
    public function setShippingRate(ShippingRateDraft $shippingRate)
    {
        $this->shippingRate = $shippingRate;

        return $this;
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
