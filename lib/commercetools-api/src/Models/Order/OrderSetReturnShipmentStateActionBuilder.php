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
 * @implements Builder<OrderSetReturnShipmentStateAction>
 */
final class OrderSetReturnShipmentStateActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $shipmentState;
    
    /**
     * @var ?string
     */
    protected $returnItemId;

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
    final public function getReturnItemId()
    {
       return $this->returnItemId;
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
    final public function withShipmentState(?string $shipmentState)
    {
        $this->shipmentState = $shipmentState;
        
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
    
    public function build(): OrderSetReturnShipmentStateAction {
        return new OrderSetReturnShipmentStateActionModel(
            $this->action,
            $this->shipmentState,
            $this->returnItemId
        );
    }
    
    public static function of(): OrderSetReturnShipmentStateActionBuilder
    {
        return new self();
    }
}