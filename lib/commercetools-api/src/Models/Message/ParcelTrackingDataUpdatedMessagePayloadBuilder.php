<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Order\TrackingData;
use Commercetools\Api\Models\Order\TrackingDataBuilder;

/**
 * @implements Builder<ParcelTrackingDataUpdatedMessagePayload>
 */
final class ParcelTrackingDataUpdatedMessagePayloadBuilder implements Builder
{
    public function __construct() {
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
     * @var ?TrackingDataBuilder|TrackingData
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
       return $this->type;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getDeliveryId()
    {
       return $this->deliveryId;
    }
    
    /**
     *
     * @return TrackingData|null
     */
    final public function getTrackingData()
    {
       return ($this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getParcelId()
    {
       return $this->parcelId;
    }
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTrackingData(?TrackingData $trackingData)
    {
        $this->trackingData = $trackingData;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withParcelId(?string $parcelId)
    {
        $this->parcelId = $parcelId;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withTrackingDataBuilder(?TrackingDataBuilder $trackingData)
    {
        $this->trackingData = $trackingData;
        
        return $this;
    }
    
    public function build(): ParcelTrackingDataUpdatedMessagePayload {
        return new ParcelTrackingDataUpdatedMessagePayloadModel(
            $this->type,
            $this->deliveryId,
            ($this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData),
            $this->parcelId
        );
    }
    
    public static function of(): ParcelTrackingDataUpdatedMessagePayloadBuilder
    {
        return new self();
    }
}