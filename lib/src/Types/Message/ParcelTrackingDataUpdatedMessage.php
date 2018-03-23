<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Order\TrackingData;

interface ParcelTrackingDataUpdatedMessage extends Message {
    const FIELD_DELIVERY_ID = 'deliveryId';
    const FIELD_PARCEL_ID = 'parcelId';
    const FIELD_TRACKING_DATA = 'trackingData';

    /**
     * @return string
     */
    public function getDeliveryId();

    /**
     * @return string
     */
    public function getParcelId();

    /**
     * @return TrackingData
     */
    public function getTrackingData();

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
     * @param TrackingData $trackingData
     * @return $this
     */
    public function setTrackingData(TrackingData $trackingData);

}
