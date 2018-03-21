<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Payment\PaymentUpdateActionModel;

class PaymentAddTransactionActionModel extends PaymentUpdateActionModel implements PaymentAddTransactionAction {
    const DISCRIMINATOR_VALUE = 'addTransaction';

    /**
     * @var TransactionDraft
     */
    protected $transaction;

    /**
     * @return TransactionDraft
     */
    public function getTransaction()
    {
        if (is_null($this->transaction)) {
            $value = $this->raw(PaymentAddTransactionAction::FIELD_TRANSACTION);
            if (is_null($value)) {
                return $this->mapData(TransactionDraft::class, null);
            }
            $value = $this->mapData(TransactionDraft::class, $value);

            $this->transaction = $value;
        }
        return $this->transaction;
    }

    /**
     * @param TransactionDraft $transaction
     * @return $this
     */
    public function setTransaction(TransactionDraft $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

}
