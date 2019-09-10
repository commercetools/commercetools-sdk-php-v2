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

use Commercetools\Api\Models\Customer\Customer;
use Commercetools\Api\Models\Customer\CustomerModel;

final class CustomerCreatedMessagePayloadModel extends JsonObjectModel implements CustomerCreatedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'CustomerCreated';
    public function __construct(
        string $type = null,
        Customer $customer = null
    ) {
        $this->type = $type;
        $this->customer = $customer;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?Customer
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
     * @return Customer|null
     */
    final public function getCustomer()
    {
       if (is_null($this->customer)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomerCreatedMessagePayload::FIELD_CUSTOMER);
           if (is_null($data)) {
               return null;
           }
           
           $this->customer = CustomerModel::of($data);
       }
       return $this->customer;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setCustomer(?Customer $customer): void
    {
        $this->customer = $customer;
    }
    
}