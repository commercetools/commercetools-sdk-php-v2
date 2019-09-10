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

/**
 * @implements Builder<CustomerSignInResult>
 */
final class CustomerSignInResultBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?JsonObject
     */
    protected $cart;
    
    /**
     * @var ?CustomerBuilder|Customer
     */
    protected $customer;

    /**
     *
     * @return JsonObject|null
     */
    final public function getCart()
    {
       return $this->cart;
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
    final public function withCart(?JsonObject $cart)
    {
        $this->cart = $cart;
        
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
    
    public function build(): CustomerSignInResult {
        return new CustomerSignInResultModel(
            $this->cart,
            ($this->customer instanceof CustomerBuilder ? $this->customer->build() : $this->customer)
        );
    }
    
    public static function of(): CustomerSignInResultBuilder
    {
        return new self();
    }
}