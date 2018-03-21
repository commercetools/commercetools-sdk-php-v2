<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionModel;

class OrderAddParcelToDeliveryActionModel extends OrderUpdateActionModel implements OrderAddParcelToDeliveryAction {
    const DISCRIMINATOR_VALUE = 'addParcelToDelivery';

    /**
     * @var string
     */
    protected $deliveryId;
    /**
     * @var ParcelMeasurements
     */
    protected $measurements;
    /**
     * @var TrackingData
     */
    protected $trackingData;
    /**
     * @var DeliveryItemCollection
     */
    protected $items;

    /**
     * @return string
     */
    public function getDeliveryId()
    {
        if (is_null($this->deliveryId)) {
            $value = $this->raw(OrderAddParcelToDeliveryAction::FIELD_DELIVERY_ID);
            $value = (string)$value;
            $this->deliveryId = $value;
        }
        return $this->deliveryId;
    }
    /**
     * @return ParcelMeasurements
     */
    public function getMeasurements()
    {
        if (is_null($this->measurements)) {
            $value = $this->raw(OrderAddParcelToDeliveryAction::FIELD_MEASUREMENTS);
            if (is_null($value)) {
                return $this->mapData(ParcelMeasurements::class, null);
            }
            $value = $this->mapData(ParcelMeasurements::class, $value);

            $this->measurements = $value;
        }
        return $this->measurements;
    }
    /**
     * @return TrackingData
     */
    public function getTrackingData()
    {
        if (is_null($this->trackingData)) {
            $value = $this->raw(OrderAddParcelToDeliveryAction::FIELD_TRACKING_DATA);
            if (is_null($value)) {
                return $this->mapData(TrackingData::class, null);
            }
            $value = $this->mapData(TrackingData::class, $value);

            $this->trackingData = $value;
        }
        return $this->trackingData;
    }
    /**
     * @return DeliveryItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            $value = $this->raw(OrderAddParcelToDeliveryAction::FIELD_ITEMS);
            if (is_null($value)) {
                return $this->mapData(DeliveryItemCollection::class, null);
            }
            $value = $this->mapData(DeliveryItemCollection::class, $value);
            $this->items = $value;
        }
        return $this->items;
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
     * @param ParcelMeasurements $measurements
     * @return $this
     */
    public function setMeasurements(ParcelMeasurements $measurements)
    {
        $this->measurements = $measurements;

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
    /**
     * @param DeliveryItemCollection $items
     * @return $this
     */
    public function setItems(DeliveryItemCollection $items)
    {
        $this->items = $items;

        return $this;
    }

}
