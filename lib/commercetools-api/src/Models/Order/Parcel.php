<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Parcel extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_KEY = 'key';
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
     * <p>User-defined unique identifier of the Parcel.</p>
     *

     * @return null|string
     */
    public function getKey();

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
     * <p>The delivery items contained in this parcel.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getItems();

    /**
     * <p>Custom Fields of this parcel.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

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
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;
}
