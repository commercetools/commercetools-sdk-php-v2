<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\TrackingData;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ParcelTrackingDataUpdatedMessage extends OrderMessage
{
    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_PARCEL_ID = 'parcelId';
    public const FIELD_TRACKING_DATA = 'trackingData';

    /**

     * @return null|string
     */
    public function getDeliveryId();

    /**

     * @return null|string
     */
    public function getParcelId();

    /**

     * @return null|TrackingData
     */
    public function getTrackingData();

    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;

    /**
     * @param ?string $parcelId
     */
    public function setParcelId(?string $parcelId): void;

    /**
     * @param ?TrackingData $trackingData
     */
    public function setTrackingData(?TrackingData $trackingData): void;
}
