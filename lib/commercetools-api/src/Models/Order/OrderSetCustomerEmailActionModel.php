<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class OrderSetCustomerEmailActionModel extends JsonObjectModel implements OrderSetCustomerEmailAction
{
    const DISCRIMINATOR_VALUE = 'setCustomerEmail';
    public function __construct(
        string $action = null,
        string $email = null
    ) {
        $this->action = $action;
        $this->email = $email;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $email;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
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
    final public function getEmail()
    {
       if (is_null($this->email)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderSetCustomerEmailAction::FIELD_EMAIL);
           if (is_null($data)) {
               return null;
           }
           $this->email = (string)$data;
       }
       return $this->email;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
    
}