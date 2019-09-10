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

use Commercetools\Api\Models\Order\DeliveryItemCollection;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;

final class StagedOrderSetDeliveryItemsActionModel extends JsonObjectModel implements StagedOrderSetDeliveryItemsAction
{
    const DISCRIMINATOR_VALUE = 'setDeliveryItems';
    public function __construct(
        string $action = null,
        string $deliveryId = null,
        DeliveryItemCollection $items = null
    ) {
        $this->action = $action;
        $this->deliveryId = $deliveryId;
        $this->items = $items;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $deliveryId;
    
    /**
     * @var ?DeliveryItemCollection
     */
    protected $items;

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
    final public function getDeliveryId()
    {
       if (is_null($this->deliveryId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StagedOrderSetDeliveryItemsAction::FIELD_DELIVERY_ID);
           if (is_null($data)) {
               return null;
           }
           $this->deliveryId = (string)$data;
       }
       return $this->deliveryId;
    }
    
    /**
     *
     * @return DeliveryItemCollection|null
     */
    final public function getItems()
    {
       if (is_null($this->items)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(StagedOrderSetDeliveryItemsAction::FIELD_ITEMS);
           if (is_null($data)) {
               return null;
           }
           $this->items = DeliveryItemCollection::fromArray($data);
       }
       return $this->items;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setDeliveryId(?string $deliveryId): void
    {
        $this->deliveryId = $deliveryId;
    }
    
    final public function setItems(?DeliveryItemCollection $items): void
    {
        $this->items = $items;
    }
    
}