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
use Commercetools\Api\Models\Order\ReturnInfo;
use Commercetools\Api\Models\Order\ReturnInfoBuilder;

/**
 * @implements Builder<OrderReturnInfoAddedMessagePayload>
 */
final class OrderReturnInfoAddedMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?ReturnInfoBuilder|ReturnInfo
     */
    protected $returnInfo;

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
     * @return ReturnInfo|null
     */
    final public function getReturnInfo()
    {
       return ($this->returnInfo instanceof ReturnInfoBuilder ? $this->returnInfo->build() : $this->returnInfo);
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
    final public function withReturnInfo(?ReturnInfo $returnInfo)
    {
        $this->returnInfo = $returnInfo;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withReturnInfoBuilder(?ReturnInfoBuilder $returnInfo)
    {
        $this->returnInfo = $returnInfo;
        
        return $this;
    }
    
    public function build(): OrderReturnInfoAddedMessagePayload {
        return new OrderReturnInfoAddedMessagePayloadModel(
            $this->type,
            ($this->returnInfo instanceof ReturnInfoBuilder ? $this->returnInfo->build() : $this->returnInfo)
        );
    }
    
    public static function of(): OrderReturnInfoAddedMessagePayloadBuilder
    {
        return new self();
    }
}