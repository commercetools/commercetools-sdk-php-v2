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

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;

final class StagedOrderSetDeliveryAddressActionModel extends JsonObjectModel implements StagedOrderSetDeliveryAddressAction
{
    const DISCRIMINATOR_VALUE = 'setDeliveryAddress';
    public function __construct(
        string $action = null,
        string $deliveryId = null,
        Address $address = null
    ) {
        $this->action = $action;
        $this->deliveryId = $deliveryId;
        $this->address = $address;
        
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
     * @var ?Address
     */
    protected $address;

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
           $data = $this->raw(StagedOrderSetDeliveryAddressAction::FIELD_DELIVERY_ID);
           if (is_null($data)) {
               return null;
           }
           $this->deliveryId = (string)$data;
       }
       return $this->deliveryId;
    }
    
    /**
     *
     * @return Address|null
     */
    final public function getAddress()
    {
       if (is_null($this->address)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(StagedOrderSetDeliveryAddressAction::FIELD_ADDRESS);
           if (is_null($data)) {
               return null;
           }
           
           $this->address = AddressModel::of($data);
       }
       return $this->address;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setDeliveryId(?string $deliveryId): void
    {
        $this->deliveryId = $deliveryId;
    }
    
    final public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }
    
}