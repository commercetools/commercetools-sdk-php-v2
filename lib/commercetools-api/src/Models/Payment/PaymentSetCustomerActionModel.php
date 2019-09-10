<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierModel;

final class PaymentSetCustomerActionModel extends JsonObjectModel implements PaymentSetCustomerAction
{
    const DISCRIMINATOR_VALUE = 'setCustomer';
    public function __construct(
        string $action = null,
        CustomerResourceIdentifier $customer = null
    ) {
        $this->action = $action;
        $this->customer = $customer;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?CustomerResourceIdentifier
     */
    protected $customer;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return CustomerResourceIdentifier|null
     */
    final public function getCustomer()
    {
       if (is_null($this->customer)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(PaymentSetCustomerAction::FIELD_CUSTOMER);
           if (is_null($data)) {
               return null;
           }
           
           $this->customer = CustomerResourceIdentifierModel::of($data);
       }
       return $this->customer;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setCustomer(?CustomerResourceIdentifier $customer): void
    {
        $this->customer = $customer;
    }
    
}