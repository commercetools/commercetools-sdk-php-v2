<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\TrackingData;

interface StagedOrderSetParcelTrackingDataAction extends StagedOrderUpdateAction
{
    
    const FIELD_PARCEL_ID = 'parcelId';
    const FIELD_TRACKING_DATA = 'trackingData';

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
    public function setParcelId(?string $parcelId): void;
    
    public function setTrackingData(?TrackingData $trackingData): void;
}