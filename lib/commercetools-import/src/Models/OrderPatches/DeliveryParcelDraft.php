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

interface DeliveryParcelDraft extends JsonObject
{
    public const FIELD_MEASUREMENTS = 'measurements';
    public const FIELD_TRACKING_DATA = 'trackingData';
    public const FIELD_ITEMS = 'items';

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
