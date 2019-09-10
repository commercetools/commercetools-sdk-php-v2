<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierBuilder;

/**
 * @implements Builder<PaymentSetCustomerAction>
 */
final class PaymentSetCustomerActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?CustomerResourceIdentifierBuilder|CustomerResourceIdentifier
     */
    protected $customer;

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
     * @return CustomerResourceIdentifier|null
     */
    final public function getCustomer()
    {
       return ($this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer);
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
    final public function withCustomer(?CustomerResourceIdentifier $customer)
    {
        $this->customer = $customer;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withCustomerBuilder(?CustomerResourceIdentifierBuilder $customer)
    {
        $this->customer = $customer;
        
        return $this;
    }
    
    public function build(): PaymentSetCustomerAction {
        return new PaymentSetCustomerActionModel(
            $this->action,
            ($this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer)
        );
    }
    
    public static function of(): PaymentSetCustomerActionBuilder
    {
        return new self();
    }
}