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


final class PaymentChangeTransactionInteractionIdActionModel extends JsonObjectModel implements PaymentChangeTransactionInteractionIdAction
{
    const DISCRIMINATOR_VALUE = 'changeTransactionInteractionId';
    public function __construct(
        string $action = null,
        string $interactionId = null,
        string $transactionId = null
    ) {
        $this->action = $action;
        $this->interactionId = $interactionId;
        $this->transactionId = $transactionId;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $interactionId;
    
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
    final public function getInteractionId()
    {
       if (is_null($this->interactionId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentChangeTransactionInteractionIdAction::FIELD_INTERACTION_ID);
           if (is_null($data)) {
               return null;
           }
           $this->interactionId = (string)$data;
       }
       return $this->interactionId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTransactionId()
    {
       if (is_null($this->transactionId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentChangeTransactionInteractionIdAction::FIELD_TRANSACTION_ID);
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
    
    final public function setInteractionId(?string $interactionId): void
    {
        $this->interactionId = $interactionId;
    }
    
    final public function setTransactionId(?string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }
    
}