<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressBuilder;

/**
 * @implements Builder<CustomerAddressRemovedMessagePayload>
 */
final class CustomerAddressRemovedMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?AddressBuilder|Address
     */
    protected $address;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       return $this->type;
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
    final public function withType(?string $type)
    {
        $this->type = $type;
        
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
    
    public function build(): CustomerAddressRemovedMessagePayload {
        return new CustomerAddressRemovedMessagePayloadModel(
            $this->type,
            ($this->address instanceof AddressBuilder ? $this->address->build() : $this->address)
        );
    }
    
    public static function of(): CustomerAddressRemovedMessagePayloadBuilder
    {
        return new self();
    }
}