<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;

final class StagedOrderSetReturnShipmentStateActionModel extends JsonObjectModel implements StagedOrderSetReturnShipmentStateAction
{
    const DISCRIMINATOR_VALUE = 'setReturnShipmentState';
    public function __construct(
        string $action = null,
        string $shipmentState = null,
        string $returnItemId = null
    ) {
        $this->action = $action;
        $this->shipmentState = $shipmentState;
        $this->returnItemId = $returnItemId;
        
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
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
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
           $data = $this->raw(StagedOrderSetReturnShipmentStateAction::FIELD_SHIPMENT_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->shipmentState = (string)$data;
       }
       return $this->shipmentState;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getReturnItemId()
    {
       if (is_null($this->returnItemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StagedOrderSetReturnShipmentStateAction::FIELD_RETURN_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->returnItemId = (string)$data;
       }
       return $this->returnItemId;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }
    
    final public function setReturnItemId(?string $returnItemId): void
    {
        $this->returnItemId = $returnItemId;
    }
    
}