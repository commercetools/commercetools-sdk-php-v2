<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<PaymentChangeTransactionTimestampAction>
 */
final class PaymentChangeTransactionTimestampActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $transactionId;

    /**

     * @var ?DateTimeImmutable
     */
    private $timestamp;

    /**

     * @return null|string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**

     * @return null|DateTimeImmutable
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param ?string $transactionId
     * @return $this
     */
    public function withTransactionId(?string $transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $timestamp
     * @return $this
     */
    public function withTimestamp(?DateTimeImmutable $timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }


    public function build(): PaymentChangeTransactionTimestampAction
    {
        return new PaymentChangeTransactionTimestampActionModel(
            $this->transactionId,
            $this->timestamp
        );
    }

    public static function of(): PaymentChangeTransactionTimestampActionBuilder
    {
        return new self();
    }
}
