<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Order\ParcelMeasurements;

interface ParcelMeasurementsUpdatedMessage extends Message
{
    const FIELD_DELIVERY_ID = 'deliveryId';
    const FIELD_PARCEL_ID = 'parcelId';
    const FIELD_MEASUREMENTS = 'measurements';

    /**
     * @return string
     */
    public function getDeliveryId();

    /**
     * @return string
     */
    public function getParcelId();

    /**
     * @return ParcelMeasurements
     */
    public function getMeasurements();

    /**
     * @param string $deliveryId
     * @return $this
     */
    public function setDeliveryId(string $deliveryId);

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
