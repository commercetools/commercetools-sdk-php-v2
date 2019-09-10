<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface PaymentChangeTransactionTimestampAction extends PaymentUpdateAction
{
    
    const FIELD_TRANSACTION_ID = 'transactionId';
    const FIELD_TIMESTAMP = 'timestamp';

    /**
     *
     * @return string|null
     */
    public function getTransactionId();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getTimestamp();
    public function setTransactionId(?string $transactionId): void;
    
    public function setTimestamp(?DateTimeImmutable $timestamp): void;
}