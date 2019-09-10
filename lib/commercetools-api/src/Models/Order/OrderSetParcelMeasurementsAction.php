<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

interface OrderSetParcelMeasurementsAction extends OrderUpdateAction
{
    const FIELD_PARCEL_ID = 'parcelId';
    const FIELD_MEASUREMENTS = 'measurements';

    /**
     * @return null|string
     */
    public function getParcelId();

    /**
     * @return null|ParcelMeasurements
     */
    public function getMeasurements();

    public function setParcelId(?string $parcelId): void;

    public function setMeasurements(?ParcelMeasurements $measurements): void;
}
