<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\TrackingData;

interface ParcelTrackingDataUpdatedMessagePayload extends MessagePayload
{
    
    const FIELD_DELIVERY_ID = 'deliveryId';
    const FIELD_PARCEL_ID = 'parcelId';
    const FIELD_TRACKING_DATA = 'trackingData';

    /**
     *
     * @return string|null
     */
    public function getDeliveryId();
    
    /**
     *
     * @return string|null
     */
    public function getParcelId();
    
    /**
     *
     * @return TrackingData|null
     */
    public function getTrackingData();
    public function setDeliveryId(?string $deliveryId): void;
    
    public function setParcelId(?string $parcelId): void;
    
    public function setTrackingData(?TrackingData $trackingData): void;
}