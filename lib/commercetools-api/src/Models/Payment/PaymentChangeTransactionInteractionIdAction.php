<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

interface PaymentChangeTransactionInteractionIdAction extends PaymentUpdateAction
{
    const FIELD_TRANSACTION_ID = 'transactionId';
    const FIELD_INTERACTION_ID = 'interactionId';

    /**
     * @return null|string
     */
    public function getTransactionId();

    /**
     * @return null|string
     */
    public function getInteractionId();

    public function setTransactionId(?string $transactionId): void;

    public function setInteractionId(?string $interactionId): void;
}
