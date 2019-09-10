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
use DateTimeImmutable;

/**
 * @implements Builder<Parcel>
 */
final class ParcelBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;
    
    /**
     * @var ?string
     */
    protected $id;
    
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
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       return $this->createdAt;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       return $this->id;
    }
    
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
    final public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withId(?string $id)
    {
        $this->id = $id;
        
        return $this;
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
    
    public function build(): Parcel {
        return new ParcelModel(
            $this->createdAt,
            $this->id,
            $this->items,
            ($this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData),
            ($this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements)
        );
    }
    
    public static function of(): ParcelBuilder
    {
        return new self();
    }
}