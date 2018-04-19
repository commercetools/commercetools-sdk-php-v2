<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Order\Parcel;
use Commercetools\Types\Order\Delivery;

class ParcelAddedToDeliveryMessageModel extends MessageModel implements ParcelAddedToDeliveryMessage
{
    const DISCRIMINATOR_VALUE = 'ParcelAddedToDelivery';

    /**
     * @var Delivery
     */
    protected $delivery;
    /**
     * @var Parcel
     */
    protected $parcel;

    /**
     * @return Delivery
     */
    public function getDelivery()
    {
        if (is_null($this->delivery)) {
            $value = $this->raw(ParcelAddedToDeliveryMessage::FIELD_DELIVERY);
            if (is_null($value)) {
                return $this->mapData(Delivery::class, null);
            }
            $value = $this->mapData(Delivery::class, $value);

            $this->delivery = $value;
        }
        return $this->delivery;
    }
    /**
     * @return Parcel
     */
    public function getParcel()
    {
        if (is_null($this->parcel)) {
            $value = $this->raw(ParcelAddedToDeliveryMessage::FIELD_PARCEL);
            if (is_null($value)) {
                return $this->mapData(Parcel::class, null);
            }
            $value = $this->mapData(Parcel::class, $value);

            $this->parcel = $value;
        }
        return $this->parcel;
    }

    /**
     * @param Delivery $delivery
     * @return $this
     */
    public function setDelivery(Delivery $delivery)
    {
        $this->delivery = $delivery;

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
