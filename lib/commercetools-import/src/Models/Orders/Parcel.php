<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Parcel extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_MEASUREMENTS = 'measurements';
    public const FIELD_TRACKING_DATA = 'trackingData';
    public const FIELD_ITEMS = 'items';

    /**

     * @return null|string
     */
    public function getId();

    /**

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**

     * @return null|ParcelMeasurements
     */
    public function getMeasurements();

    /**

     * @return null|TrackingData
     */
    public function getTrackingData();

    /**

     * @return null|DeliveryItemCollection
     */
    public function getItems();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?ParcelMeasurements $measurements
     */
    public function setMeasurements(?ParcelMeasurements $measurements): void;

    /**
     * @param ?TrackingData $trackingData
     */
    public function setTrackingData(?TrackingData $trackingData): void;

    /**
     * @param ?DeliveryItemCollection $items
     */
    public function setItems(?DeliveryItemCollection $items): void;
}
