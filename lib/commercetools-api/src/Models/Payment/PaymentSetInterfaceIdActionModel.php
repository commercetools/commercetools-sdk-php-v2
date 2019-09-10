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


final class PaymentSetInterfaceIdActionModel extends JsonObjectModel implements PaymentSetInterfaceIdAction
{
    const DISCRIMINATOR_VALUE = 'setInterfaceId';
    public function __construct(
        string $action = null,
        string $interfaceId = null
    ) {
        $this->action = $action;
        $this->interfaceId = $interfaceId;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $interfaceId;

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
    final public function getInterfaceId()
    {
       if (is_null($this->interfaceId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentSetInterfaceIdAction::FIELD_INTERFACE_ID);
           if (is_null($data)) {
               return null;
           }
           $this->interfaceId = (string)$data;
       }
       return $this->interfaceId;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setInterfaceId(?string $interfaceId): void
    {
        $this->interfaceId = $interfaceId;
    }
    
}