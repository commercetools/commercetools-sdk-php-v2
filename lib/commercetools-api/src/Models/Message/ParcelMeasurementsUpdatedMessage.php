<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\ParcelMeasurements;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ParcelMeasurementsUpdatedMessage extends OrderMessage
{
    public const FIELD_DELIVERY_ID = 'deliveryId';
    public const FIELD_PARCEL_ID = 'parcelId';
    public const FIELD_MEASUREMENTS = 'measurements';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *

     * @return null|string
     */
    public function getDeliveryId();

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     *

     * @return null|string
     */
    public function getParcelId();

    /**
     * <p>The <a href="ctp:api:type:ParcelMeasurements">Parcel Measurements</a> that were set on the <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     *

     * @return null|ParcelMeasurements
     */
    public function getMeasurements();

    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;

    /**
     * @param ?string $parcelId
     */
    public function setParcelId(?string $parcelId): void;

    /**
     * @param ?ParcelMeasurements $measurements
     */
    public function setMeasurements(?ParcelMeasurements $measurements): void;
}
