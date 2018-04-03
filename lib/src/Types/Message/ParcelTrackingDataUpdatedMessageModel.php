<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Order\TrackingData;

class ParcelTrackingDataUpdatedMessageModel extends MessageModel implements ParcelTrackingDataUpdatedMessage {
    const DISCRIMINATOR_VALUE = 'ParcelTrackingDataUpdated';

    /**
     * @var string
     */
    protected $deliveryId;
    /**
     * @var string
     */
    protected $parcelId;
    /**
     * @var TrackingData
     */
    protected $trackingData;

    /**
     * @return string
     */
    public function getDeliveryId()
    {
        if (is_null($this->deliveryId)) {
            $value = $this->raw(ParcelTrackingDataUpdatedMessage::FIELD_DELIVERY_ID);
            $value = (string)$value;
            $this->deliveryId = $value;
        }
        return $this->deliveryId;
    }
    /**
     * @return string
     */
    public function getParcelId()
    {
        if (is_null($this->parcelId)) {
            $value = $this->raw(ParcelTrackingDataUpdatedMessage::FIELD_PARCEL_ID);
            $value = (string)$value;
            $this->parcelId = $value;
        }
        return $this->parcelId;
    }
    /**
     * @return TrackingData
     */
    public function getTrackingData()
    {
        if (is_null($this->trackingData)) {
            $value = $this->raw(ParcelTrackingDataUpdatedMessage::FIELD_TRACKING_DATA);
            if (is_null($value)) {
                return $this->mapData(TrackingData::class, null);
            }
            $value = $this->mapData(TrackingData::class, $value);

            $this->trackingData = $value;
        }
        return $this->trackingData;
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
     * @param string $parcelId
     * @return $this
     */
    public function setParcelId(string $parcelId)
    {
        $this->parcelId = (string)$parcelId;

        return $this;
    }
    /**
     * @param TrackingData $trackingData
     * @return $this
     */
    public function setTrackingData(TrackingData $trackingData)
    {
        $this->trackingData = $trackingData;

        return $this;
    }

}
