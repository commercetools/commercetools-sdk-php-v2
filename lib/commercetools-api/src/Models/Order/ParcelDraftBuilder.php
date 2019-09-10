<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ParcelDraft>
 */
final class ParcelDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?DeliveryItemCollection
     */
    protected $items;
    
    /**
     * @var ?TrackingDataBuilder|TrackingData
     */
    protected $trackingData;
    
    /**
     * @var ?ParcelMeasurementsBuilder|ParcelMeasurements
     */
    protected $measurements;

    /**
     *
     * @return DeliveryItemCollection|null
     */
    final public function getItems()
    {
       return $this->items;
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
     * @return ParcelMeasurements|null
     */
    final public function getMeasurements()
    {
       return ($this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements);
    }
    /**
     * @return $this
     */
    final public function withItems(?DeliveryItemCollection $items)
    {
        $this->items = $items;
        
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
    final public function withMeasurements(?ParcelMeasurements $measurements)
    {
        $this->measurements = $measurements;
        
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
    
    /**
     * @return $this
     */
    final public function withMeasurementsBuilder(?ParcelMeasurementsBuilder $measurements)
    {
        $this->measurements = $measurements;
        
        return $this;
    }
    
    public function build(): ParcelDraft {
        return new ParcelDraftModel(
            $this->items,
            ($this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData),
            ($this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements)
        );
    }
    
    public static function of(): ParcelDraftBuilder
    {
        return new self();
    }
}