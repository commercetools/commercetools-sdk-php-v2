<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class OrderChangeShipmentStateActionModel extends JsonObjectModel implements OrderChangeShipmentStateAction
{
    const DISCRIMINATOR_VALUE = 'changeShipmentState';
    public function __construct(
        string $action = null,
        string $shipmentState = null
    ) {
        $this->action = $action;
        $this->shipmentState = $shipmentState;
        
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
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getShipmentState()
    {
       if (is_null($this->shipmentState)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderChangeShipmentStateAction::FIELD_SHIPMENT_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->shipmentState = (string)$data;
       }
       return $this->shipmentState;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }
    
}