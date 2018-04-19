<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

interface OrderSetParcelMeasurementsAction extends OrderUpdateAction
{
    const FIELD_PARCEL_ID = 'parcelId';
    const FIELD_MEASUREMENTS = 'measurements';

    /**
     * @return string
     */
    public function getParcelId();

    /**
     * @return ParcelMeasurements
     */
    public function getMeasurements();

    /**
     * @param string $parcelId
     * @return $this
     */
    public function setParcelId(string $parcelId);

    /**
     * @param ParcelMeasurements $measurements
     * @return $this
     */
    public function setMeasurements(ParcelMeasurements $measurements);

}
