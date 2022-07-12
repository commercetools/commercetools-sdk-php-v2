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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentTransactionAddedMessagePayload>
 */
final class PaymentTransactionAddedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|Transaction|TransactionBuilder
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
     * @param ?Transaction $transaction
     * @return $this
     */
    public function withTransaction(?Transaction $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * @deprecated use withTransaction() instead
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
            $this->transaction instanceof TransactionBuilder ? $this->transaction->build() : $this->transaction
        );
    }

    public static function of(): PaymentTransactionAddedMessagePayloadBuilder
    {
        return new self();
    }
}
