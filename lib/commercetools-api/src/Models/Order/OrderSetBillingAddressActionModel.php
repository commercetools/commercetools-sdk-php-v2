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

final class OrderSetBillingAddressActionModel extends JsonObjectModel implements OrderSetBillingAddressAction
{
    const DISCRIMINATOR_VALUE = 'setBillingAddress';
    public function __construct(
        string $action = null,
        Address $address = null
    ) {
        $this->action = $action;
        $this->address = $address;
        
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
           $data = $this->raw(OrderSetBillingAddressAction::FIELD_ADDRESS);
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
    
    final public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }
    
}