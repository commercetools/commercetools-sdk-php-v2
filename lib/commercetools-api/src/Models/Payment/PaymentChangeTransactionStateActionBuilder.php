<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentChangeTransactionStateAction>
 */
final class PaymentChangeTransactionStateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $state;

    /**
     * @var ?string
     */
    private $transactionId;

    /**
     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return null|string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

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

    public function build(): PaymentChangeTransactionStateAction
    {
        return new PaymentChangeTransactionStateActionModel(
            $this->state,
            $this->transactionId
        );
    }

    public static function of(): PaymentChangeTransactionStateActionBuilder
    {
        return new self();
    }
}
