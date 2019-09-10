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


final class PaymentChangeTransactionStateActionModel extends JsonObjectModel implements PaymentChangeTransactionStateAction
{
    const DISCRIMINATOR_VALUE = 'changeTransactionState';
    public function __construct(
        string $action = null,
        string $state = null,
        string $transactionId = null
    ) {
        $this->action = $action;
        $this->state = $state;
        $this->transactionId = $transactionId;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $state;
    
    /**
     * @var ?string
     */
    protected $transactionId;

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
    final public function getState()
    {
       if (is_null($this->state)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentChangeTransactionStateAction::FIELD_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->state = (string)$data;
       }
       return $this->state;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTransactionId()
    {
       if (is_null($this->transactionId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentChangeTransactionStateAction::FIELD_TRANSACTION_ID);
           if (is_null($data)) {
               return null;
           }
           $this->transactionId = (string)$data;
       }
       return $this->transactionId;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setState(?string $state): void
    {
        $this->state = $state;
    }
    
    final public function setTransactionId(?string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }
    
}