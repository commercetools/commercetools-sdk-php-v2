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
 * @implements Builder<OrderSetParcelMeasurementsAction>
 */
final class OrderSetParcelMeasurementsActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
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
    final public function getAction()
    {
       return $this->action;
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
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
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
    
    public function build(): OrderSetParcelMeasurementsAction {
        return new OrderSetParcelMeasurementsActionModel(
            $this->action,
            ($this->measurements instanceof ParcelMeasurementsBuilder ? $this->measurements->build() : $this->measurements),
            $this->parcelId
        );
    }
    
    public static function of(): OrderSetParcelMeasurementsActionBuilder
    {
        return new self();
    }
}