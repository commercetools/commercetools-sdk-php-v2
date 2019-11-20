<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraftCollection;
use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentDraft>
 */
final class PaymentDraftBuilder implements Builder
{
    /**
     * @var Money|?MoneyBuilder
     */
    private $amountAuthorized;

    /**
     * @var ?string
     */
    private $anonymousId;

    /**
     * @var PaymentMethodInfo|?PaymentMethodInfoBuilder
     */
    private $paymentMethodInfo;

    /**
     * @var CustomFieldsDraft|?CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * @var ?string
     */
    private $authorizedUntil;

    /**
     * @var ?string
     */
    private $externalId;

    /**
     * @var ?TransactionDraftCollection
     */
    private $transactions;

    /**
     * @var Money|?MoneyBuilder
     */
    private $amountPaid;

    /**
     * @var Money|?MoneyBuilder
     */
    private $amountRefunded;

    /**
     * @var Money|?MoneyBuilder
     */
    private $amountPlanned;

    /**
     * @var ?CustomFieldsDraftCollection
     */
    private $interfaceInteractions;

    /**
     * @var ?string
     */
    private $interfaceId;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var PaymentStatusDraft|?PaymentStatusDraftBuilder
     */
    private $paymentStatus;

    /**
     * @var CustomerResourceIdentifier|?CustomerResourceIdentifierBuilder
     */
    private $customer;

    /**
     * @return null|Money
     */
    public function getAmountAuthorized()
    {
        return $this->amountAuthorized instanceof MoneyBuilder ? $this->amountAuthorized->build() : $this->amountAuthorized;
    }

    /**
     * @return null|string
     */
    public function getAnonymousId()
    {
        return $this->anonymousId;
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
     * @return null|string
     */
    public function getAuthorizedUntil()
    {
        return $this->authorizedUntil;
    }

    /**
     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @return null|TransactionDraftCollection
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * @return null|Money
     */
    public function getAmountPaid()
    {
        return $this->amountPaid instanceof MoneyBuilder ? $this->amountPaid->build() : $this->amountPaid;
    }

    /**
     * @return null|Money
     */
    public function getAmountRefunded()
    {
        return $this->amountRefunded instanceof MoneyBuilder ? $this->amountRefunded->build() : $this->amountRefunded;
    }

    /**
     * @return null|Money
     */
    public function getAmountPlanned()
    {
        return $this->amountPlanned instanceof MoneyBuilder ? $this->amountPlanned->build() : $this->amountPlanned;
    }

    /**
     * @return null|CustomFieldsDraftCollection
     */
    public function getInterfaceInteractions()
    {
        return $this->interfaceInteractions;
    }

    /**
     * @return null|string
     */
    public function getInterfaceId()
    {
        return $this->interfaceId;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|PaymentStatusDraft
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus instanceof PaymentStatusDraftBuilder ? $this->paymentStatus->build() : $this->paymentStatus;
    }

    /**
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * @return $this
     */
    public function withAmountAuthorized(?Money $amountAuthorized)
    {
        $this->amountAuthorized = $amountAuthorized;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;

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
    public function withAuthorizedUntil(?string $authorizedUntil)
    {
        $this->authorizedUntil = $authorizedUntil;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTransactions(?TransactionDraftCollection $transactions)
    {
        $this->transactions = $transactions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmountPaid(?Money $amountPaid)
    {
        $this->amountPaid = $amountPaid;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmountRefunded(?Money $amountRefunded)
    {
        $this->amountRefunded = $amountRefunded;

        return $this;
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
    public function withInterfaceInteractions(?CustomFieldsDraftCollection $interfaceInteractions)
    {
        $this->interfaceInteractions = $interfaceInteractions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withInterfaceId(?string $interfaceId)
    {
        $this->interfaceId = $interfaceId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPaymentStatus(?PaymentStatusDraft $paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomer(?CustomerResourceIdentifier $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmountAuthorizedBuilder(?MoneyBuilder $amountAuthorized)
    {
        $this->amountAuthorized = $amountAuthorized;

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
    public function withAmountPaidBuilder(?MoneyBuilder $amountPaid)
    {
        $this->amountPaid = $amountPaid;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmountRefundedBuilder(?MoneyBuilder $amountRefunded)
    {
        $this->amountRefunded = $amountRefunded;

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
    public function withPaymentStatusBuilder(?PaymentStatusDraftBuilder $paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerBuilder(?CustomerResourceIdentifierBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function build(): PaymentDraft
    {
        return new PaymentDraftModel(
            ($this->amountAuthorized instanceof MoneyBuilder ? $this->amountAuthorized->build() : $this->amountAuthorized),
            $this->anonymousId,
            ($this->paymentMethodInfo instanceof PaymentMethodInfoBuilder ? $this->paymentMethodInfo->build() : $this->paymentMethodInfo),
            ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom),
            $this->authorizedUntil,
            $this->externalId,
            $this->transactions,
            ($this->amountPaid instanceof MoneyBuilder ? $this->amountPaid->build() : $this->amountPaid),
            ($this->amountRefunded instanceof MoneyBuilder ? $this->amountRefunded->build() : $this->amountRefunded),
            ($this->amountPlanned instanceof MoneyBuilder ? $this->amountPlanned->build() : $this->amountPlanned),
            $this->interfaceInteractions,
            $this->interfaceId,
            $this->key,
            ($this->paymentStatus instanceof PaymentStatusDraftBuilder ? $this->paymentStatus->build() : $this->paymentStatus),
            ($this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer)
        );
    }

    public static function of(): PaymentDraftBuilder
    {
        return new self();
    }
}
