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
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceBuilder;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceBuilder;

/**
 * @implements Builder<OrderCustomerSetMessagePayload>
 */
final class OrderCustomerSetMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?CustomerGroupReferenceBuilder|CustomerGroupReference
     */
    protected $oldCustomerGroup;
    
    /**
     * @var ?CustomerGroupReferenceBuilder|CustomerGroupReference
     */
    protected $customerGroup;
    
    /**
     * @var ?CustomerReferenceBuilder|CustomerReference
     */
    protected $oldCustomer;
    
    /**
     * @var ?CustomerReferenceBuilder|CustomerReference
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
     * @return CustomerGroupReference|null
     */
    final public function getOldCustomerGroup()
    {
       return ($this->oldCustomerGroup instanceof CustomerGroupReferenceBuilder ? $this->oldCustomerGroup->build() : $this->oldCustomerGroup);
    }
    
    /**
     *
     * @return CustomerGroupReference|null
     */
    final public function getCustomerGroup()
    {
       return ($this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup);
    }
    
    /**
     *
     * @return CustomerReference|null
     */
    final public function getOldCustomer()
    {
       return ($this->oldCustomer instanceof CustomerReferenceBuilder ? $this->oldCustomer->build() : $this->oldCustomer);
    }
    
    /**
     *
     * @return CustomerReference|null
     */
    final public function getCustomer()
    {
       return ($this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer);
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
    final public function withOldCustomerGroup(?CustomerGroupReference $oldCustomerGroup)
    {
        $this->oldCustomerGroup = $oldCustomerGroup;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerGroup(?CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withOldCustomer(?CustomerReference $oldCustomer)
    {
        $this->oldCustomer = $oldCustomer;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomer(?CustomerReference $customer)
    {
        $this->customer = $customer;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withOldCustomerGroupBuilder(?CustomerGroupReferenceBuilder $oldCustomerGroup)
    {
        $this->oldCustomerGroup = $oldCustomerGroup;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerGroupBuilder(?CustomerGroupReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withOldCustomerBuilder(?CustomerReferenceBuilder $oldCustomer)
    {
        $this->oldCustomer = $oldCustomer;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerBuilder(?CustomerReferenceBuilder $customer)
    {
        $this->customer = $customer;
        
        return $this;
    }
    
    public function build(): OrderCustomerSetMessagePayload {
        return new OrderCustomerSetMessagePayloadModel(
            $this->type,
            ($this->oldCustomerGroup instanceof CustomerGroupReferenceBuilder ? $this->oldCustomerGroup->build() : $this->oldCustomerGroup),
            ($this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup),
            ($this->oldCustomer instanceof CustomerReferenceBuilder ? $this->oldCustomer->build() : $this->oldCustomer),
            ($this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer)
        );
    }
    
    public static function of(): OrderCustomerSetMessagePayloadBuilder
    {
        return new self();
    }
}