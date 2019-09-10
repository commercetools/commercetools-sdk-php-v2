<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ParcelDraftModel extends JsonObjectModel implements ParcelDraft
{
    
    public function __construct(
        DeliveryItemCollection $items = null,
        TrackingData $trackingData = null,
        ParcelMeasurements $measurements = null
    ) {
        $this->items = $items;
        $this->trackingData = $trackingData;
        $this->measurements = $measurements;
        
    }

    /**
     * @var ?DeliveryItemCollection
     */
    protected $items;
    
    /**
     * @var ?TrackingData
     */
    protected $trackingData;
    
    /**
     * @var ?ParcelMeasurements
     */
    protected $measurements;

    /**
     *
     * @return DeliveryItemCollection|null
     */
    final public function getItems()
    {
       if (is_null($this->items)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ParcelDraft::FIELD_ITEMS);
           if (is_null($data)) {
               return null;
           }
           $this->items = DeliveryItemCollection::fromArray($data);
       }
       return $this->items;
    }
    
    /**
     *
     * @return TrackingData|null
     */
    final public function getTrackingData()
    {
       if (is_null($this->trackingData)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ParcelDraft::FIELD_TRACKING_DATA);
           if (is_null($data)) {
               return null;
           }
           
           $this->trackingData = TrackingDataModel::of($data);
       }
       return $this->trackingData;
    }
    
    /**
     *
     * @return ParcelMeasurements|null
     */
    final public function getMeasurements()
    {
       if (is_null($this->measurements)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ParcelDraft::FIELD_MEASUREMENTS);
           if (is_null($data)) {
               return null;
           }
           
           $this->measurements = ParcelMeasurementsModel::of($data);
       }
       return $this->measurements;
    }
    final public function setItems(?DeliveryItemCollection $items): void
    {
        $this->items = $items;
    }
    
    final public function setTrackingData(?TrackingData $trackingData): void
    {
        $this->trackingData = $trackingData;
    }
    
    final public function setMeasurements(?ParcelMeasurements $measurements): void
    {
        $this->measurements = $measurements;
    }
    
}