<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

interface OrderAddParcelToDeliveryAction extends OrderUpdateAction
{
    const FIELD_DELIVERY_ID = 'deliveryId';
    const FIELD_MEASUREMENTS = 'measurements';
    const FIELD_TRACKING_DATA = 'trackingData';
    const FIELD_ITEMS = 'items';

    /**
     * @return string
     */
    public function getDeliveryId();

    /**
     * @return ParcelMeasurements
     */
    public function getMeasurements();

    /**
     * @return TrackingData
     */
    public function getTrackingData();

    /**
     * @return DeliveryItemCollection
     */
    public function getItems();

    /**
     * @param string $deliveryId
     * @return $this
     */
    public function setDeliveryId(string $deliveryId);

    /**
     * @param ParcelMeasurements $measurements
     * @return $this
     */
    public function setMeasurements(ParcelMeasurements $measurements);

    /**
     * @param TrackingData $trackingData
     * @return $this
     */
    public function setTrackingData(TrackingData $trackingData);

    /**
     * @param DeliveryItemCollection $items
     * @return $this
     */
    public function setItems(DeliveryItemCollection $items);

}
