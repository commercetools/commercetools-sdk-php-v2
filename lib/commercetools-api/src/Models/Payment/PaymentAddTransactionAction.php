<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

interface PaymentAddTransactionAction extends PaymentUpdateAction
{
    const FIELD_TRANSACTION = 'transaction';

    /**
     * @return null|TransactionDraft
     */
    public function getTransaction();

    public function setTransaction(?TransactionDraft $transaction): void;
}
