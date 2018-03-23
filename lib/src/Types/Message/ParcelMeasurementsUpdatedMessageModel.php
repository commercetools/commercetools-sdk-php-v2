<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Order\ParcelMeasurements;

class ParcelMeasurementsUpdatedMessageModel extends MessageModel implements ParcelMeasurementsUpdatedMessage {
    const DISCRIMINATOR_VALUE = 'ParcelMeasurementsUpdated';

    /**
     * @var string
     */
    protected $deliveryId;
    /**
     * @var string
     */
    protected $parcelId;
    /**
     * @var ParcelMeasurements
     */
    protected $measurements;

    /**
     * @return string
     */
    public function getDeliveryId()
    {
        if (is_null($this->deliveryId)) {
            $value = $this->raw(ParcelMeasurementsUpdatedMessage::FIELD_DELIVERY_ID);
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
            $value = $this->raw(ParcelMeasurementsUpdatedMessage::FIELD_PARCEL_ID);
            $value = (string)$value;
            $this->parcelId = $value;
        }
        return $this->parcelId;
    }
    /**
     * @return ParcelMeasurements
     */
    public function getMeasurements()
    {
        if (is_null($this->measurements)) {
            $value = $this->raw(ParcelMeasurementsUpdatedMessage::FIELD_MEASUREMENTS);
            if (is_null($value)) {
                return $this->mapData(ParcelMeasurements::class, null);
            }
            $value = $this->mapData(ParcelMeasurements::class, $value);

            $this->measurements = $value;
        }
        return $this->measurements;
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
     * @param ParcelMeasurements $measurements
     * @return $this
     */
    public function setMeasurements(ParcelMeasurements $measurements)
    {
        $this->measurements = $measurements;

        return $this;
    }

}
