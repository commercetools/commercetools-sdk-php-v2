<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProjectSetShippingRateInputTypeAction>
 */
final class ProjectSetShippingRateInputTypeActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ShippingRateInputTypeBuilder|ShippingRateInputType
     */
    protected $shippingRateInputType;

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
     * @return ShippingRateInputType|null
     */
    final public function getShippingRateInputType()
    {
       return ($this->shippingRateInputType instanceof ShippingRateInputTypeBuilder ? $this->shippingRateInputType->build() : $this->shippingRateInputType);
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
    final public function withShippingRateInputType(?ShippingRateInputType $shippingRateInputType)
    {
        $this->shippingRateInputType = $shippingRateInputType;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withShippingRateInputTypeBuilder(?ShippingRateInputTypeBuilder $shippingRateInputType)
    {
        $this->shippingRateInputType = $shippingRateInputType;
        
        return $this;
    }
    
    public function build(): ProjectSetShippingRateInputTypeAction {
        return new ProjectSetShippingRateInputTypeActionModel(
            $this->action,
            ($this->shippingRateInputType instanceof ShippingRateInputTypeBuilder ? $this->shippingRateInputType->build() : $this->shippingRateInputType)
        );
    }
    
    public static function of(): ProjectSetShippingRateInputTypeActionBuilder
    {
        return new self();
    }
}