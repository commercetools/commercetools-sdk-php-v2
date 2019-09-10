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


final class PaymentSetMethodInfoMethodActionModel extends JsonObjectModel implements PaymentSetMethodInfoMethodAction
{
    const DISCRIMINATOR_VALUE = 'setMethodInfoMethod';
    public function __construct(
        string $action = null,
        string $method = null
    ) {
        $this->action = $action;
        $this->method = $method;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $method;

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
     * @return string|null
     */
    final public function getMethod()
    {
       if (is_null($this->method)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentSetMethodInfoMethodAction::FIELD_METHOD);
           if (is_null($data)) {
               return null;
           }
           $this->method = (string)$data;
       }
       return $this->method;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setMethod(?string $method): void
    {
        $this->method = $method;
    }
    
}