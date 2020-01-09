<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Payment\PaymentMethodInfo;
use Commercetools\Api\Models\Payment\PaymentMethodInfoBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<MyPaymentDraft>
 */
final class MyPaymentDraftBuilder implements Builder
{
    /**
     * @var null|Money|MoneyBuilder
     */
    private $amountPlanned;

    /**
     * @var null|PaymentMethodInfo|PaymentMethodInfoBuilder
     */
    private $paymentMethodInfo;

    /**
     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * @var null|MyTransactionDraft|MyTransactionDraftBuilder
     */
    private $transaction;

    /**
     * <p>How much money this payment intends to receive from the customer.
     * The value usually matches the cart or order gross total.</p>
     *
     * @return null|Money
     */
    public function getAmountPlanned()
    {
        return $this->amountPlanned instanceof MoneyBuilder ? $this->amountPlanned->build() : $this->amountPlanned;
    }

    /**
     * @return null|PaymentMethodInfo
     */
    public function getPaymentMethodInfo()
    {
        return $this->paymentMethodInfo instanceof PaymentMethodInfoBuilder ? $this->paymentMethodInfo->build() : $this->paymentMethodInfo;
    }

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>A list of financial transactions of the <code>Authorization</code> or <code>Charge</code>
     * TransactionTypes.</p>
     *
     * @return null|MyTransactionDraft
     */
    public function getTransaction()
    {
        return $this->transaction instanceof MyTransactionDraftBuilder ? $this->transaction->build() : $this->transaction;
    }

    /**
     * @return $this
     */
    public function withAmountPlanned(?Money $amountPlanned)
    {
        $this->amountPlanned = $amountPlanned;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPaymentMethodInfo(?PaymentMethodInfo $paymentMethodInfo)
    {
        $this->paymentMethodInfo = $paymentMethodInfo;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTransaction(?MyTransactionDraft $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmountPlannedBuilder(?MoneyBuilder $amountPlanned)
    {
        $this->amountPlanned = $amountPlanned;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPaymentMethodInfoBuilder(?PaymentMethodInfoBuilder $paymentMethodInfo)
    {
        $this->paymentMethodInfo = $paymentMethodInfo;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTransactionBuilder(?MyTransactionDraftBuilder $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    public function build(): MyPaymentDraft
    {
        return new MyPaymentDraftModel(
            $this->amountPlanned instanceof MoneyBuilder ? $this->amountPlanned->build() : $this->amountPlanned,
            $this->paymentMethodInfo instanceof PaymentMethodInfoBuilder ? $this->paymentMethodInfo->build() : $this->paymentMethodInfo,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom,
            $this->transaction instanceof MyTransactionDraftBuilder ? $this->transaction->build() : $this->transaction
        );
    }

    public static function of(): MyPaymentDraftBuilder
    {
        return new self();
    }
}
