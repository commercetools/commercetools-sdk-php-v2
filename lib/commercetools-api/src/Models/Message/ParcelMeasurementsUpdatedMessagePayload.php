<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Order\ParcelMeasurements;

interface ParcelMeasurementsUpdatedMessagePayload extends MessagePayload
{

    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_PARCEL_ID = 'parcelId';
    public const FIELD_MEASUREMENTS = 'measurements';

    /**
     * @return null|string
     */
    public function getDeliveryId();

    /**
     * @return null|string
     */
    public function getParcelId();

    /**
     * @return null|ParcelMeasurements
     */
    public function getMeasurements();

    public function setDeliveryId(?string $deliveryId): void;

    public function setParcelId(?string $parcelId): void;

    public function setMeasurements(?ParcelMeasurements $measurements): void;
}
