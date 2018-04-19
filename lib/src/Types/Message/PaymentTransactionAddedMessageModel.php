<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Payment\Transaction;

class PaymentTransactionAddedMessageModel extends MessageModel implements PaymentTransactionAddedMessage
{
    const DISCRIMINATOR_VALUE = 'PaymentTransactionAdded';

    /**
     * @var Transaction
     */
    protected $transaction;

    /**
     * @return Transaction
     */
    public function getTransaction()
    {
        if (is_null($this->transaction)) {
            $value = $this->raw(PaymentTransactionAddedMessage::FIELD_TRANSACTION);
            if (is_null($value)) {
                return $this->mapData(Transaction::class, null);
            }
            $value = $this->mapData(Transaction::class, $value);

            $this->transaction = $value;
        }
        return $this->transaction;
    }

    /**
     * @param Transaction $transaction
     * @return $this
     */
    public function setTransaction(Transaction $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

}
