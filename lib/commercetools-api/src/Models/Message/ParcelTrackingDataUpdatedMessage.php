<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\TrackingData;

interface ParcelTrackingDataUpdatedMessage extends Message
{
    const FIELD_DELIVERY_ID = 'deliveryId';
    const FIELD_PARCEL_ID = 'parcelId';
    const FIELD_TRACKING_DATA = 'trackingData';

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

    public function setDeliveryId(?string $deliveryId): void;

    public function setParcelId(?string $parcelId): void;

    public function setTrackingData(?TrackingData $trackingData): void;
}
