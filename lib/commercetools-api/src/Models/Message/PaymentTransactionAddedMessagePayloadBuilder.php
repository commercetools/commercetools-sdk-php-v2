<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Payment\Transaction;
use Commercetools\Api\Models\Payment\TransactionBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentTransactionAddedMessagePayload>
 */
final class PaymentTransactionAddedMessagePayloadBuilder implements Builder
{
    /**
     * @var Transaction|?TransactionBuilder
     */
    private $transaction;

    /**
     * @return null|Transaction
     */
    public function getTransaction()
    {
        return $this->transaction instanceof TransactionBuilder ? $this->transaction->build() : $this->transaction;
    }

    /**
     * @return $this
     */
    public function withTransaction(?Transaction $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTransactionBuilder(?TransactionBuilder $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    public function build(): PaymentTransactionAddedMessagePayload
    {
        return new PaymentTransactionAddedMessagePayloadModel(
            ($this->transaction instanceof TransactionBuilder ? $this->transaction->build() : $this->transaction)
        );
    }

    public static function of(): PaymentTransactionAddedMessagePayloadBuilder
    {
        return new self();
    }
}
