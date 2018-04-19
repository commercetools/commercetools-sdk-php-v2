<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

interface OrderSetParcelTrackingDataAction extends OrderUpdateAction
{
    const FIELD_PARCEL_ID = 'parcelId';
    const FIELD_TRACKING_DATA = 'trackingData';

    /**
     * @return string
     */
    public function getParcelId();

    /**
     * @return TrackingData
     */
    public function getTrackingData();

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
