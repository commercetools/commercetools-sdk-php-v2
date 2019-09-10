<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;

interface OrderSetParcelMeasurementsAction extends OrderUpdateAction
{
    
    const FIELD_PARCEL_ID = 'parcelId';
    const FIELD_MEASUREMENTS = 'measurements';

    /**
     *
     * @return string|null
     */
    public function getParcelId();
    
    /**
     *
     * @return ParcelMeasurements|null
     */
    public function getMeasurements();
    public function setParcelId(?string $parcelId): void;
    
    public function setMeasurements(?ParcelMeasurements $measurements): void;
}