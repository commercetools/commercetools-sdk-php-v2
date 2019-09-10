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
use Commercetools\Api\Models\Cart\ShippingRateInput;
use Commercetools\Api\Models\Cart\ShippingRateInputBuilder;

/**
 * @implements Builder<OrderShippingRateInputSetMessagePayload>
 */
final class OrderShippingRateInputSetMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?ShippingRateInputBuilder|ShippingRateInput
     */
    protected $shippingRateInput;
    
    /**
     * @var ?ShippingRateInputBuilder|ShippingRateInput
     */
    protected $oldShippingRateInput;

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
     * @return ShippingRateInput|null
     */
    final public function getShippingRateInput()
    {
       return ($this->shippingRateInput instanceof ShippingRateInputBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput);
    }
    
    /**
     *
     * @return ShippingRateInput|null
     */
    final public function getOldShippingRateInput()
    {
       return ($this->oldShippingRateInput instanceof ShippingRateInputBuilder ? $this->oldShippingRateInput->build() : $this->oldShippingRateInput);
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
    final public function withShippingRateInput(?ShippingRateInput $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withOldShippingRateInput(?ShippingRateInput $oldShippingRateInput)
    {
        $this->oldShippingRateInput = $oldShippingRateInput;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withShippingRateInputBuilder(?ShippingRateInputBuilder $shippingRateInput)
    {
        $this->shippingRateInput = $shippingRateInput;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withOldShippingRateInputBuilder(?ShippingRateInputBuilder $oldShippingRateInput)
    {
        $this->oldShippingRateInput = $oldShippingRateInput;
        
        return $this;
    }
    
    public function build(): OrderShippingRateInputSetMessagePayload {
        return new OrderShippingRateInputSetMessagePayloadModel(
            $this->type,
            ($this->shippingRateInput instanceof ShippingRateInputBuilder ? $this->shippingRateInput->build() : $this->shippingRateInput),
            ($this->oldShippingRateInput instanceof ShippingRateInputBuilder ? $this->oldShippingRateInput->build() : $this->oldShippingRateInput)
        );
    }
    
    public static function of(): OrderShippingRateInputSetMessagePayloadBuilder
    {
        return new self();
    }
}