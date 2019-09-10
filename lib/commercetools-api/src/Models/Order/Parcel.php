<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Parcel extends JsonObject
{
    
    const FIELD_ID = 'id';
    const FIELD_CREATED_AT = 'createdAt';
    const FIELD_MEASUREMENTS = 'measurements';
    const FIELD_TRACKING_DATA = 'trackingData';
    const FIELD_ITEMS = 'items';

    /**
     *
     * @return string|null
     */
    public function getId();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getCreatedAt();
    
    /**
     *
     * @return ParcelMeasurements|null
     */
    public function getMeasurements();
    
    /**
     *
     * @return TrackingData|null
     */
    public function getTrackingData();
    
    /**
     *
     * @return DeliveryItemCollection|null
     */
    public function getItems();
    public function setId(?string $id): void;
    
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;
    
    public function setMeasurements(?ParcelMeasurements $measurements): void;
    
    public function setTrackingData(?TrackingData $trackingData): void;
    
    public function setItems(?DeliveryItemCollection $items): void;
}