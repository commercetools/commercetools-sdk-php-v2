<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class PaymentTransactionStateChangedMessagePayloadModel extends JsonObjectModel implements PaymentTransactionStateChangedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'PaymentTransactionStateChanged';
    public function __construct(
        string $type = null,
        string $state = null,
        string $transactionId = null
    ) {
        $this->type = $type;
        $this->state = $state;
        $this->transactionId = $transactionId;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
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
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MessagePayload::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getState()
    {
       if (is_null($this->state)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentTransactionStateChangedMessagePayload::FIELD_STATE);
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
           $data = $this->raw(PaymentTransactionStateChangedMessagePayload::FIELD_TRANSACTION_ID);
           if (is_null($data)) {
               return null;
           }
           $this->transactionId = (string)$data;
       }
       return $this->transactionId;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
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