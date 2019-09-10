<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;

interface ParcelDraft extends JsonObject
{
    
    const FIELD_MEASUREMENTS = 'measurements';
    const FIELD_TRACKING_DATA = 'trackingData';
    const FIELD_ITEMS = 'items';

    /**
     *
     * @return ParcelMeasurements|null
     */
    public function getMeasurements();
    
    /**
     *
     * @return TrackingData|null
     */
    public function getTrackingData();
    
    /**
     *
     * @return DeliveryItemCollection|null
     */
    public function getItems();
    public function setMeasurements(?ParcelMeasurements $measurements): void;
    
    public function setTrackingData(?TrackingData $trackingData): void;
    
    public function setItems(?DeliveryItemCollection $items): void;
}