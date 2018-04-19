<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Payment\Transaction;

interface PaymentTransactionAddedMessage extends Message
{
    const FIELD_TRANSACTION = 'transaction';

    /**
     * @return Transaction
     */
    public function getTransaction();

    /**
     * @param Transaction $transaction
     * @return $this
     */
    public function setTransaction(Transaction $transaction);

}
