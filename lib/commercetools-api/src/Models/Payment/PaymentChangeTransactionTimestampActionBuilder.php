<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<PaymentChangeTransactionTimestampAction>
 */
final class PaymentChangeTransactionTimestampActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $transactionId;

    /**
     * @var ?DateTimeImmutable
     */
    private $timestamp;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

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
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTransactionId(?string $transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
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
            $this->action,
            $this->transactionId,
            $this->timestamp
        );
    }

    public static function of(): PaymentChangeTransactionTimestampActionBuilder
    {
        return new self();
    }
}
