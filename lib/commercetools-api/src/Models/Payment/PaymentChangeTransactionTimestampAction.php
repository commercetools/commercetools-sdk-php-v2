<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface PaymentChangeTransactionTimestampAction extends PaymentUpdateAction
{
    public const FIELD_TRANSACTION_ID = 'transactionId';
    public const FIELD_TIMESTAMP = 'timestamp';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Transaction">Transaction</a>.</p>
     *

     * @return null|string
     */
    public function getTransactionId();

    /**
     * <p>Timestamp of the Transaction as reported by the payment service.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getTimestamp();

    /**
     * @param ?string $transactionId
     */
    public function setTransactionId(?string $transactionId): void;

    /**
     * @param ?DateTimeImmutable $timestamp
     */
    public function setTimestamp(?DateTimeImmutable $timestamp): void;
}
