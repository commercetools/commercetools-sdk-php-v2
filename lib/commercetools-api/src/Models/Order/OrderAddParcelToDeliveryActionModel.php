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


final class OrderAddParcelToDeliveryActionModel extends JsonObjectModel implements OrderAddParcelToDeliveryAction
{
    const DISCRIMINATOR_VALUE = 'addParcelToDelivery';
    public function __construct(
        string $action = null,
        string $deliveryId = null,
        DeliveryItemCollection $items = null,
        TrackingData $trackingData = null,
        ParcelMeasurements $measurements = null
    ) {
        $this->action = $action;
        $this->deliveryId = $deliveryId;
        $this->items = $items;
        $this->trackingData = $trackingData;
        $this->measurements = $measurements;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $deliveryId;
    
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
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getDeliveryId()
    {
       if (is_null($this->deliveryId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderAddParcelToDeliveryAction::FIELD_DELIVERY_ID);
           if (is_null($data)) {
               return null;
           }
           $this->deliveryId = (string)$data;
       }
       return $this->deliveryId;
    }
    
    /**
     *
     * @return DeliveryItemCollection|null
     */
    final public function getItems()
    {
       if (is_null($this->items)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(OrderAddParcelToDeliveryAction::FIELD_ITEMS);
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
           $data = $this->raw(OrderAddParcelToDeliveryAction::FIELD_TRACKING_DATA);
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
           $data = $this->raw(OrderAddParcelToDeliveryAction::FIELD_MEASUREMENTS);
           if (is_null($data)) {
               return null;
           }
           
           $this->measurements = ParcelMeasurementsModel::of($data);
       }
       return $this->measurements;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setDeliveryId(?string $deliveryId): void
    {
        $this->deliveryId = $deliveryId;
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