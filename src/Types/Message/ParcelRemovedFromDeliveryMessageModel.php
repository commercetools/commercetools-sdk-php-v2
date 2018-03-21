<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Order\Parcel;

class ParcelRemovedFromDeliveryMessageModel extends MessageModel implements ParcelRemovedFromDeliveryMessage {
    const DISCRIMINATOR_VALUE = 'ParcelRemovedFromDelivery';

    /**
     * @var string
     */
    protected $deliveryId;
    /**
     * @var Parcel
     */
    protected $parcel;

    /**
     * @return string
     */
    public function getDeliveryId()
    {
        if (is_null($this->deliveryId)) {
            $value = $this->raw(ParcelRemovedFromDeliveryMessage::FIELD_DELIVERY_ID);
            $value = (string)$value;
            $this->deliveryId = $value;
        }
        return $this->deliveryId;
    }
    /**
     * @return Parcel
     */
    public function getParcel()
    {
        if (is_null($this->parcel)) {
            $value = $this->raw(ParcelRemovedFromDeliveryMessage::FIELD_PARCEL);
            if (is_null($value)) {
                return $this->mapData(Parcel::class, null);
            }
            $value = $this->mapData(Parcel::class, $value);

            $this->parcel = $value;
        }
        return $this->parcel;
    }

    /**
     * @param string $deliveryId
     * @return $this
     */
    public function setDeliveryId(string $deliveryId)
    {
        $this->deliveryId = (string)$deliveryId;

        return $this;
    }
    /**
     * @param Parcel $parcel
     * @return $this
     */
    public function setParcel(Parcel $parcel)
    {
        $this->parcel = $parcel;

        return $this;
    }

}
