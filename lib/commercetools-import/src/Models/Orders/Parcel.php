<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Customfields\Custom;
use DateTimeImmutable;

interface Parcel extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_MEASUREMENTS = 'measurements';
    public const FIELD_TRACKING_DATA = 'trackingData';
    public const FIELD_ITEMS = 'items';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Unique identifier of the Parcel.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Date and time (UTC) the Parcel was created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Information about the dimensions of the Parcel.</p>
     *

     * @return null|ParcelMeasurements
     */
    public function getMeasurements();

    /**
     * <p>Shipment tracking information of the Parcel.</p>
     *

     * @return null|TrackingData
     */
    public function getTrackingData();

    /**
     * <p>Line Items or Custom Line Items delivered in this Parcel.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getItems();

    /**
     * <p>Custom Fields of the Parcel.</p>
     *

     * @return null|Custom
     */
    public function getCustom();

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

    /**
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void;
}
