<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSetParcelMeasurementsAction extends OrderUpdateAction
{
    public const FIELD_PARCEL_ID = 'parcelId';
    public const FIELD_MEASUREMENTS = 'measurements';

    /**

     * @return null|string
     */
    public function getParcelId();

    /**

     * @return null|ParcelMeasurements
     */
    public function getMeasurements();

    /**
     * @param ?string $parcelId
     */
    public function setParcelId(?string $parcelId): void;

    /**
     * @param ?ParcelMeasurements $measurements
     */
    public function setMeasurements(?ParcelMeasurements $measurements): void;
}
