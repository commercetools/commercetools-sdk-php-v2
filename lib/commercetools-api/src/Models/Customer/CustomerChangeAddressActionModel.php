<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressModel;

final class CustomerChangeAddressActionModel extends JsonObjectModel implements CustomerChangeAddressAction
{
    const DISCRIMINATOR_VALUE = 'changeAddress';
    public function __construct(
        string $action = null,
        Address $address = null,
        string $addressId = null
    ) {
        $this->action = $action;
        $this->address = $address;
        $this->addressId = $addressId;
        
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
     * @var ?string
     */
    protected $addressId;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerUpdateAction::FIELD_ACTION);
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
           $data = $this->raw(CustomerChangeAddressAction::FIELD_ADDRESS);
           if (is_null($data)) {
               return null;
           }
           
           $this->address = AddressModel::of($data);
       }
       return $this->address;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAddressId()
    {
       if (is_null($this->addressId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerChangeAddressAction::FIELD_ADDRESS_ID);
           if (is_null($data)) {
               return null;
           }
           $this->addressId = (string)$data;
       }
       return $this->addressId;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }
    
    final public function setAddressId(?string $addressId): void
    {
        $this->addressId = $addressId;
    }
    
}