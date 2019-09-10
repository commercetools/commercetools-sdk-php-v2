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
use Commercetools\Api\Models\Order\ParcelMeasurements;
use Commercetools\Api\Models\Order\ParcelMeasurementsBuilder;

/**
 * @implements Builder<ParcelMeasurementsUpdatedMessagePayload>
 */
final class ParcelMeasurementsUpdatedMessagePayloadBuilder implements Builder
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
     * @var ?ParcelMeasurementsBuilder|ParcelMeasurements
     */
    protected $measurements;
    
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
     * @return ParcelMeasurements|null
     */
    final public function getMeasurements()
    {
       return ($this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements);
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
    final public function withMeasurements(?ParcelMeasurements $measurements)
    {
        $this->measurements = $measurements;
        
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
    final public function withMeasurementsBuilder(?ParcelMeasurementsBuilder $measurements)
    {
        $this->measurements = $measurements;
        
        return $this;
    }
    
    public function build(): ParcelMeasurementsUpdatedMessagePayload {
        return new ParcelMeasurementsUpdatedMessagePayloadModel(
            $this->type,
            $this->deliveryId,
            ($this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements),
            $this->parcelId
        );
    }
    
    public static function of(): ParcelMeasurementsUpdatedMessagePayloadBuilder
    {
        return new self();
    }
}