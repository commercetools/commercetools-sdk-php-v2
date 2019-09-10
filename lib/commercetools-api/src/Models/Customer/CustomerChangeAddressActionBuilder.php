<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;

/**
 * @implements Builder<CustomerChangeAddressAction>
 */
final class CustomerChangeAddressActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?AddressBuilder|Address
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
       return $this->action;
    }
    
    /**
     *
     * @return Address|null
     */
    final public function getAddress()
    {
       return ($this->address instanceof AddressBuilder ? $this->address->build() : $this->address);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAddressId()
    {
       return $this->addressId;
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
    final public function withAddress(?Address $address)
    {
        $this->address = $address;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAddressId(?string $addressId)
    {
        $this->addressId = $addressId;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withAddressBuilder(?AddressBuilder $address)
    {
        $this->address = $address;
        
        return $this;
    }
    
    public function build(): CustomerChangeAddressAction {
        return new CustomerChangeAddressActionModel(
            $this->action,
            ($this->address instanceof AddressBuilder ? $this->address->build() : $this->address),
            $this->addressId
        );
    }
    
    public static function of(): CustomerChangeAddressActionBuilder
    {
        return new self();
    }
}