<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceModel;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceModel;

final class OrderCustomerSetMessagePayloadModel extends JsonObjectModel implements OrderCustomerSetMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderCustomerSet';
    public function __construct(
        string $type = null,
        CustomerGroupReference $oldCustomerGroup = null,
        CustomerGroupReference $customerGroup = null,
        CustomerReference $oldCustomer = null,
        CustomerReference $customer = null
    ) {
        $this->type = $type;
        $this->oldCustomerGroup = $oldCustomerGroup;
        $this->customerGroup = $customerGroup;
        $this->oldCustomer = $oldCustomer;
        $this->customer = $customer;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?CustomerGroupReference
     */
    protected $oldCustomerGroup;
    
    /**
     * @var ?CustomerGroupReference
     */
    protected $customerGroup;
    
    /**
     * @var ?CustomerReference
     */
    protected $oldCustomer;
    
    /**
     * @var ?CustomerReference
     */
    protected $customer;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MessagePayload::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return CustomerGroupReference|null
     */
    final public function getOldCustomerGroup()
    {
       if (is_null($this->oldCustomerGroup)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderCustomerSetMessagePayload::FIELD_OLD_CUSTOMER_GROUP);
           if (is_null($data)) {
               return null;
           }
           
           $this->oldCustomerGroup = CustomerGroupReferenceModel::of($data);
       }
       return $this->oldCustomerGroup;
    }
    
    /**
     *
     * @return CustomerGroupReference|null
     */
    final public function getCustomerGroup()
    {
       if (is_null($this->customerGroup)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderCustomerSetMessagePayload::FIELD_CUSTOMER_GROUP);
           if (is_null($data)) {
               return null;
           }
           
           $this->customerGroup = CustomerGroupReferenceModel::of($data);
       }
       return $this->customerGroup;
    }
    
    /**
     *
     * @return CustomerReference|null
     */
    final public function getOldCustomer()
    {
       if (is_null($this->oldCustomer)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderCustomerSetMessagePayload::FIELD_OLD_CUSTOMER);
           if (is_null($data)) {
               return null;
           }
           
           $this->oldCustomer = CustomerReferenceModel::of($data);
       }
       return $this->oldCustomer;
    }
    
    /**
     *
     * @return CustomerReference|null
     */
    final public function getCustomer()
    {
       if (is_null($this->customer)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderCustomerSetMessagePayload::FIELD_CUSTOMER);
           if (is_null($data)) {
               return null;
           }
           
           $this->customer = CustomerReferenceModel::of($data);
       }
       return $this->customer;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setOldCustomerGroup(?CustomerGroupReference $oldCustomerGroup): void
    {
        $this->oldCustomerGroup = $oldCustomerGroup;
    }
    
    final public function setCustomerGroup(?CustomerGroupReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }
    
    final public function setOldCustomer(?CustomerReference $oldCustomer): void
    {
        $this->oldCustomer = $oldCustomer;
    }
    
    final public function setCustomer(?CustomerReference $customer): void
    {
        $this->customer = $customer;
    }
    
}