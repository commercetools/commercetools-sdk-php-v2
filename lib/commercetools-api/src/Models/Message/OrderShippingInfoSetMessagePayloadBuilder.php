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
use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Api\Models\Cart\ShippingInfoBuilder;

/**
 * @implements Builder<OrderShippingInfoSetMessagePayload>
 */
final class OrderShippingInfoSetMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?ShippingInfoBuilder|ShippingInfo
     */
    protected $shippingInfo;
    
    /**
     * @var ?ShippingInfoBuilder|ShippingInfo
     */
    protected $oldShippingInfo;

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
     * @return ShippingInfo|null
     */
    final public function getShippingInfo()
    {
       return ($this->shippingInfo instanceof ShippingInfoBuilder ? $this->shippingInfo->build() : $this->shippingInfo);
    }
    
    /**
     *
     * @return ShippingInfo|null
     */
    final public function getOldShippingInfo()
    {
       return ($this->oldShippingInfo instanceof ShippingInfoBuilder ? $this->oldShippingInfo->build() : $this->oldShippingInfo);
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
    final public function withShippingInfo(?ShippingInfo $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withOldShippingInfo(?ShippingInfo $oldShippingInfo)
    {
        $this->oldShippingInfo = $oldShippingInfo;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withShippingInfoBuilder(?ShippingInfoBuilder $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withOldShippingInfoBuilder(?ShippingInfoBuilder $oldShippingInfo)
    {
        $this->oldShippingInfo = $oldShippingInfo;
        
        return $this;
    }
    
    public function build(): OrderShippingInfoSetMessagePayload {
        return new OrderShippingInfoSetMessagePayloadModel(
            $this->type,
            ($this->shippingInfo instanceof ShippingInfoBuilder ? $this->shippingInfo->build() : $this->shippingInfo),
            ($this->oldShippingInfo instanceof ShippingInfoBuilder ? $this->oldShippingInfo->build() : $this->oldShippingInfo)
        );
    }
    
    public static function of(): OrderShippingInfoSetMessagePayloadBuilder
    {
        return new self();
    }
}