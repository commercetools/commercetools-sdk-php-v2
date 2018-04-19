<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

interface PaymentAddTransactionAction extends PaymentUpdateAction
{
    const FIELD_TRANSACTION = 'transaction';

    /**
     * @return TransactionDraft
     */
    public function getTransaction();

    /**
     * @param TransactionDraft $transaction
     * @return $this
     */
    public function setTransaction(TransactionDraft $transaction);

}
