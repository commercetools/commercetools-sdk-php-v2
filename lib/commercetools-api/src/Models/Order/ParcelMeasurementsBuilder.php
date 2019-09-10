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
 * @implements Builder<ParcelMeasurements>
 */
final class ParcelMeasurementsBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?int
     */
    protected $weightInGram;
    
    /**
     * @var ?int
     */
    protected $lengthInMillimeter;
    
    /**
     * @var ?int
     */
    protected $heightInMillimeter;
    
    /**
     * @var ?int
     */
    protected $widthInMillimeter;

    /**
     *
     * @return int|null
     */
    final public function getWeightInGram()
    {
       return $this->weightInGram;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getLengthInMillimeter()
    {
       return $this->lengthInMillimeter;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getHeightInMillimeter()
    {
       return $this->heightInMillimeter;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getWidthInMillimeter()
    {
       return $this->widthInMillimeter;
    }
    /**
     * @return $this
     */
    final public function withWeightInGram(?int $weightInGram)
    {
        $this->weightInGram = $weightInGram;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLengthInMillimeter(?int $lengthInMillimeter)
    {
        $this->lengthInMillimeter = $lengthInMillimeter;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withHeightInMillimeter(?int $heightInMillimeter)
    {
        $this->heightInMillimeter = $heightInMillimeter;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withWidthInMillimeter(?int $widthInMillimeter)
    {
        $this->widthInMillimeter = $widthInMillimeter;
        
        return $this;
    }
    
    public function build(): ParcelMeasurements {
        return new ParcelMeasurementsModel(
            $this->weightInGram,
            $this->lengthInMillimeter,
            $this->heightInMillimeter,
            $this->widthInMillimeter
        );
    }
    
    public static function of(): ParcelMeasurementsBuilder
    {
        return new self();
    }
}