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


final class PaymentSetMethodInfoInterfaceActionModel extends JsonObjectModel implements PaymentSetMethodInfoInterfaceAction
{
    const DISCRIMINATOR_VALUE = 'setMethodInfoInterface';
    public function __construct(
        string $action = null,
        string $interface = null
    ) {
        $this->action = $action;
        $this->interface = $interface;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $interface;

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
    final public function getInterface()
    {
       if (is_null($this->interface)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentSetMethodInfoInterfaceAction::FIELD_INTERFACE);
           if (is_null($data)) {
               return null;
           }
           $this->interface = (string)$data;
       }
       return $this->interface;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setInterface(?string $interface): void
    {
        $this->interface = $interface;
    }
    
}