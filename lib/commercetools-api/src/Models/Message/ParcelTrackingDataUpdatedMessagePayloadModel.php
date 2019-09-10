<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Order\TrackingData;
use Commercetools\Api\Models\Order\TrackingDataModel;

final class ParcelTrackingDataUpdatedMessagePayloadModel extends JsonObjectModel implements ParcelTrackingDataUpdatedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'ParcelTrackingDataUpdated';
    public function __construct(
        string $type = null,
        string $deliveryId = null,
        TrackingData $trackingData = null,
        string $parcelId = null
    ) {
        $this->type = $type;
        $this->deliveryId = $deliveryId;
        $this->trackingData = $trackingData;
        $this->parcelId = $parcelId;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?string
     */
    protected $deliveryId;
    
    /**
     * @var ?TrackingData
     */
    protected $trackingData;
    
    /**
     * @var ?string
     */
    protected $parcelId;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MessagePayload::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getDeliveryId()
    {
       if (is_null($this->deliveryId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ParcelTrackingDataUpdatedMessagePayload::FIELD_DELIVERY_ID);
           if (is_null($data)) {
               return null;
           }
           $this->deliveryId = (string)$data;
       }
       return $this->deliveryId;
    }
    
    /**
     *
     * @return TrackingData|null
     */
    final public function getTrackingData()
    {
       if (is_null($this->trackingData)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ParcelTrackingDataUpdatedMessagePayload::FIELD_TRACKING_DATA);
           if (is_null($data)) {
               return null;
           }
           
           $this->trackingData = TrackingDataModel::of($data);
       }
       return $this->trackingData;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getParcelId()
    {
       if (is_null($this->parcelId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ParcelTrackingDataUpdatedMessagePayload::FIELD_PARCEL_ID);
           if (is_null($data)) {
               return null;
           }
           $this->parcelId = (string)$data;
       }
       return $this->parcelId;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setDeliveryId(?string $deliveryId): void
    {
        $this->deliveryId = $deliveryId;
    }
    
    final public function setTrackingData(?TrackingData $trackingData): void
    {
        $this->trackingData = $trackingData;
    }
    
    final public function setParcelId(?string $parcelId): void
    {
        $this->parcelId = $parcelId;
    }
    
}