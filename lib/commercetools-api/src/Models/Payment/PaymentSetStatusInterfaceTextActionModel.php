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


final class PaymentSetStatusInterfaceTextActionModel extends JsonObjectModel implements PaymentSetStatusInterfaceTextAction
{
    const DISCRIMINATOR_VALUE = 'setStatusInterfaceText';
    public function __construct(
        string $action = null,
        string $interfaceText = null
    ) {
        $this->action = $action;
        $this->interfaceText = $interfaceText;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $interfaceText;

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
    final public function getInterfaceText()
    {
       if (is_null($this->interfaceText)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentSetStatusInterfaceTextAction::FIELD_INTERFACE_TEXT);
           if (is_null($data)) {
               return null;
           }
           $this->interfaceText = (string)$data;
       }
       return $this->interfaceText;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setInterfaceText(?string $interfaceText): void
    {
        $this->interfaceText = $interfaceText;
    }
    
}