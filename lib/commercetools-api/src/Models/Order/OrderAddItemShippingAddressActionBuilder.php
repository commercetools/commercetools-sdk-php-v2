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
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;

/**
 * @implements Builder<OrderAddItemShippingAddressAction>
 */
final class OrderAddItemShippingAddressActionBuilder implements Builder
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
    final public function withAddressBuilder(?AddressBuilder $address)
    {
        $this->address = $address;
        
        return $this;
    }
    
    public function build(): OrderAddItemShippingAddressAction {
        return new OrderAddItemShippingAddressActionModel(
            $this->action,
            ($this->address instanceof AddressBuilder ? $this->address->build() : $this->address)
        );
    }
    
    public static function of(): OrderAddItemShippingAddressActionBuilder
    {
        return new self();
    }
}