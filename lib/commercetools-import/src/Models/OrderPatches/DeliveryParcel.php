<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Orders\DeliveryItemCollection;
use Commercetools\Import\Models\Orders\ParcelMeasurements;
use Commercetools\Import\Models\Orders\TrackingData;

interface DeliveryParcel extends JsonObject
{
    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_MEASUREMENTS = 'measurements';
    public const FIELD_TRACKING_DATA = 'trackingData';
    public const FIELD_ITEMS = 'items';

    /**
     * <p>Unique identifier of the Delivery.</p>
     *

     * @return null|string
     */
    public function getDeliveryId();

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
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;

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
