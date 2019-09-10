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


final class PaymentSetExternalIdActionModel extends JsonObjectModel implements PaymentSetExternalIdAction
{
    const DISCRIMINATOR_VALUE = 'setExternalId';
    public function __construct(
        string $action = null,
        string $externalId = null
    ) {
        $this->action = $action;
        $this->externalId = $externalId;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $externalId;

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
    final public function getExternalId()
    {
       if (is_null($this->externalId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentSetExternalIdAction::FIELD_EXTERNAL_ID);
           if (is_null($data)) {
               return null;
           }
           $this->externalId = (string)$data;
       }
       return $this->externalId;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }
    
}