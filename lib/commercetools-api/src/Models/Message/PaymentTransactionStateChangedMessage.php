<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

interface PaymentTransactionStateChangedMessage extends Message
{
    const FIELD_TRANSACTION_ID = 'transactionId';
    const FIELD_STATE = 'state';

    /**
     * @return null|string
     */
    public function getTransactionId();

    /**
     * @return null|string
     */
    public function getState();

    public function setTransactionId(?string $transactionId): void;

    public function setState(?string $state): void;
}
