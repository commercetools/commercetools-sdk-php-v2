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

/**
 * @implements Builder<OrderReturnShipmentStateChangedMessagePayload>
 */
final class OrderReturnShipmentStateChangedMessagePayloadBuilder implements Builder
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
    protected $returnItemId;
    
    /**
     * @var ?string
     */
    protected $returnShipmentState;

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
    final public function getReturnItemId()
    {
       return $this->returnItemId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getReturnShipmentState()
    {
       return $this->returnShipmentState;
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
    final public function withReturnItemId(?string $returnItemId)
    {
        $this->returnItemId = $returnItemId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withReturnShipmentState(?string $returnShipmentState)
    {
        $this->returnShipmentState = $returnShipmentState;
        
        return $this;
    }
    
    public function build(): OrderReturnShipmentStateChangedMessagePayload {
        return new OrderReturnShipmentStateChangedMessagePayloadModel(
            $this->type,
            $this->returnItemId,
            $this->returnShipmentState
        );
    }
    
    public static function of(): OrderReturnShipmentStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}