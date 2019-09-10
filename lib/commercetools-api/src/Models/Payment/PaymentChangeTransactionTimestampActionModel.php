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

use DateTimeImmutable;
use DateTimeImmutableModel;

final class PaymentChangeTransactionTimestampActionModel extends JsonObjectModel implements PaymentChangeTransactionTimestampAction
{
    const DISCRIMINATOR_VALUE = 'changeTransactionTimestamp';
    public function __construct(
        string $action = null,
        string $transactionId = null,
        DateTimeImmutable $timestamp = null
    ) {
        $this->action = $action;
        $this->transactionId = $transactionId;
        $this->timestamp = $timestamp;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $transactionId;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $timestamp;

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
    final public function getTransactionId()
    {
       if (is_null($this->transactionId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentChangeTransactionTimestampAction::FIELD_TRANSACTION_ID);
           if (is_null($data)) {
               return null;
           }
           $this->transactionId = (string)$data;
       }
       return $this->transactionId;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getTimestamp()
    {
       if (is_null($this->timestamp)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(PaymentChangeTransactionTimestampAction::FIELD_TIMESTAMP);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->timestamp = $data;
       }
       return $this->timestamp;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setTransactionId(?string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }
    
    final public function setTimestamp(?DateTimeImmutable $timestamp): void
    {
        $this->timestamp = $timestamp;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[PaymentChangeTransactionTimestampAction::FIELD_TIMESTAMP]) && $data[PaymentChangeTransactionTimestampAction::FIELD_TIMESTAMP] instanceof \DateTimeImmutable) {
           $data[PaymentChangeTransactionTimestampAction::FIELD_TIMESTAMP] = $data[PaymentChangeTransactionTimestampAction::FIELD_TIMESTAMP]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}