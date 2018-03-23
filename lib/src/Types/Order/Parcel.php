<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObject;

interface Parcel extends JsonObject {
    const FIELD_ID = 'id';
    const FIELD_CREATED_AT = 'createdAt';
    const FIELD_MEASUREMENTS = 'measurements';
    const FIELD_TRACKING_DATA = 'trackingData';
    const FIELD_ITEMS = 'items';

    /**
     * @return string
     */
    public function getId();

    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt();

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
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

    /**
     * @param \DateTimeImmutable $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

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
