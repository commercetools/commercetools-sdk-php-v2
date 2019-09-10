<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;

final class StagedOrderSetCustomerIdActionModel extends JsonObjectModel implements StagedOrderSetCustomerIdAction
{
    const DISCRIMINATOR_VALUE = 'setCustomerId';
    public function __construct(
        string $action = null,
        string $customerId = null
    ) {
        $this->action = $action;
        $this->customerId = $customerId;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $customerId;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCustomerId()
    {
       if (is_null($this->customerId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StagedOrderSetCustomerIdAction::FIELD_CUSTOMER_ID);
           if (is_null($data)) {
               return null;
           }
           $this->customerId = (string)$data;
       }
       return $this->customerId;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }
    
}