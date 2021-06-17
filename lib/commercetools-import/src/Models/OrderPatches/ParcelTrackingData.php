<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Orders\TrackingData;

interface ParcelTrackingData extends JsonObject
{
    public const FIELD_PARCEL_ID = 'parcelId';
    public const FIELD_TRACKING_DATA = 'trackingData';

    /**
     * @return null|string
     */
    public function getParcelId();

    /**
     * @return null|TrackingData
     */
    public function getTrackingData();

    /**
     * @param ?string $parcelId
     */
    public function setParcelId(?string $parcelId): void;

    /**
     * @param ?TrackingData $trackingData
     */
    public function setTrackingData(?TrackingData $trackingData): void;
}
