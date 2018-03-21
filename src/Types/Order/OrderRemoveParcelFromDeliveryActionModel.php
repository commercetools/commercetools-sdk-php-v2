<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionModel;

class OrderRemoveParcelFromDeliveryActionModel extends OrderUpdateActionModel implements OrderRemoveParcelFromDeliveryAction {
    const DISCRIMINATOR_VALUE = 'removeParcelFromDelivery';

    /**
     * @var string
     */
    protected $parcelId;

    /**
     * @return string
     */
    public function getParcelId()
    {
        if (is_null($this->parcelId)) {
            $value = $this->raw(OrderRemoveParcelFromDeliveryAction::FIELD_PARCEL_ID);
            $value = (string)$value;
            $this->parcelId = $value;
        }
        return $this->parcelId;
    }

    /**
     * @param string $parcelId
     * @return $this
     */
    public function setParcelId(string $parcelId)
    {
        $this->parcelId = (string)$parcelId;

        return $this;
    }

}
