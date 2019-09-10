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
 * @implements Builder<OrderShipmentStateChangedMessagePayload>
 */
final class OrderShipmentStateChangedMessagePayloadBuilder implements Builder
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
    protected $shipmentState;
    
    /**
     * @var ?string
     */
    protected $oldShipmentState;

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
    final public function getShipmentState()
    {
       return $this->shipmentState;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getOldShipmentState()
    {
       return $this->oldShipmentState;
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
    final public function withShipmentState(?string $shipmentState)
    {
        $this->shipmentState = $shipmentState;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withOldShipmentState(?string $oldShipmentState)
    {
        $this->oldShipmentState = $oldShipmentState;
        
        return $this;
    }
    
    public function build(): OrderShipmentStateChangedMessagePayload {
        return new OrderShipmentStateChangedMessagePayloadModel(
            $this->type,
            $this->shipmentState,
            $this->oldShipmentState
        );
    }
    
    public static function of(): OrderShipmentStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}