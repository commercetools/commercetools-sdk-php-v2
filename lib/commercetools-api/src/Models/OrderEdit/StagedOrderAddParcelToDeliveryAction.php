<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Order\DeliveryItemCollection;
use Commercetools\Api\Models\Order\ParcelMeasurements;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\TrackingData;

interface StagedOrderAddParcelToDeliveryAction extends StagedOrderUpdateAction
{
    
    const FIELD_DELIVERY_ID = 'deliveryId';
    const FIELD_MEASUREMENTS = 'measurements';
    const FIELD_TRACKING_DATA = 'trackingData';
    const FIELD_ITEMS = 'items';

    /**
     *
     * @return string|null
     */
    public function getDeliveryId();
    
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
    public function setDeliveryId(?string $deliveryId): void;
    
    public function setMeasurements(?ParcelMeasurements $measurements): void;
    
    public function setTrackingData(?TrackingData $trackingData): void;
    
    public function setItems(?DeliveryItemCollection $items): void;
}