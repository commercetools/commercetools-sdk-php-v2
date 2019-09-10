<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Api\Models\Order\TrackingData;
use Commercetools\Api\Models\Order\TrackingDataBuilder;

/**
 * @implements Builder<StagedOrderSetParcelTrackingDataAction>
 */
final class StagedOrderSetParcelTrackingDataActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
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
    final public function getAction()
    {
       return $this->action;
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
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
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
    
    public function build(): StagedOrderSetParcelTrackingDataAction {
        return new StagedOrderSetParcelTrackingDataActionModel(
            $this->action,
            ($this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData),
            $this->parcelId
        );
    }
    
    public static function of(): StagedOrderSetParcelTrackingDataActionBuilder
    {
        return new self();
    }
}