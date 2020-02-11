<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface OrderSetParcelTrackingDataAction extends OrderUpdateAction
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

    public function setParcelId(?string $parcelId): void;

    public function setTrackingData(?TrackingData $trackingData): void;
}
