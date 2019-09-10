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
use Commercetools\Api\Models\Customer\Customer;
use Commercetools\Api\Models\Customer\CustomerBuilder;

/**
 * @implements Builder<CustomerCreatedMessagePayload>
 */
final class CustomerCreatedMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?CustomerBuilder|Customer
     */
    protected $customer;

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
     * @return Customer|null
     */
    final public function getCustomer()
    {
       return ($this->customer instanceof CustomerBuilder ? $this->customer->build() : $this->customer);
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
    final public function withCustomer(?Customer $customer)
    {
        $this->customer = $customer;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withCustomerBuilder(?CustomerBuilder $customer)
    {
        $this->customer = $customer;
        
        return $this;
    }
    
    public function build(): CustomerCreatedMessagePayload {
        return new CustomerCreatedMessagePayloadModel(
            $this->type,
            ($this->customer instanceof CustomerBuilder ? $this->customer->build() : $this->customer)
        );
    }
    
    public static function of(): CustomerCreatedMessagePayloadBuilder
    {
        return new self();
    }
}