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


final class PaymentSetAnonymousIdActionModel extends JsonObjectModel implements PaymentSetAnonymousIdAction
{
    const DISCRIMINATOR_VALUE = 'setAnonymousId';
    public function __construct(
        string $action = null,
        string $anonymousId = null
    ) {
        $this->action = $action;
        $this->anonymousId = $anonymousId;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $anonymousId;

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
    final public function getAnonymousId()
    {
       if (is_null($this->anonymousId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentSetAnonymousIdAction::FIELD_ANONYMOUS_ID);
           if (is_null($data)) {
               return null;
           }
           $this->anonymousId = (string)$data;
       }
       return $this->anonymousId;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }
    
}