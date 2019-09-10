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

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressModel;

final class OrderAddDeliveryActionModel extends JsonObjectModel implements OrderAddDeliveryAction
{
    const DISCRIMINATOR_VALUE = 'addDelivery';
    public function __construct(
        string $action = null,
        Address $address = null,
        DeliveryItemCollection $items = null,
        ParcelDraftCollection $parcels = null
    ) {
        $this->action = $action;
        $this->address = $address;
        $this->items = $items;
        $this->parcels = $parcels;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?Address
     */
    protected $address;
    
    /**
     * @var ?DeliveryItemCollection
     */
    protected $items;
    
    /**
     * @var ?ParcelDraftCollection
     */
    protected $parcels;

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
     * @return Address|null
     */
    final public function getAddress()
    {
       if (is_null($this->address)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderAddDeliveryAction::FIELD_ADDRESS);
           if (is_null($data)) {
               return null;
           }
           
           $this->address = AddressModel::of($data);
       }
       return $this->address;
    }
    
    /**
     *
     * @return DeliveryItemCollection|null
     */
    final public function getItems()
    {
       if (is_null($this->items)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(OrderAddDeliveryAction::FIELD_ITEMS);
           if (is_null($data)) {
               return null;
           }
           $this->items = DeliveryItemCollection::fromArray($data);
       }
       return $this->items;
    }
    
    /**
     *
     * @return ParcelDraftCollection|null
     */
    final public function getParcels()
    {
       if (is_null($this->parcels)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(OrderAddDeliveryAction::FIELD_PARCELS);
           if (is_null($data)) {
               return null;
           }
           $this->parcels = ParcelDraftCollection::fromArray($data);
       }
       return $this->parcels;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }
    
    final public function setItems(?DeliveryItemCollection $items): void
    {
        $this->items = $items;
    }
    
    final public function setParcels(?ParcelDraftCollection $parcels): void
    {
        $this->parcels = $parcels;
    }
    
}