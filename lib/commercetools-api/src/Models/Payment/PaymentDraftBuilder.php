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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentDraft>
 */
final class PaymentDraftBuilder implements Builder
{
    /**

     * @var null|CustomerResourceIdentifier|CustomerResourceIdentifierBuilder
     */
    private $customer;

    /**

     * @var ?string
     */
    private $anonymousId;

    /**

     * @var ?string
     */
    private $interfaceId;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $amountPlanned;

    /**

     * @var null|PaymentMethodInfo|PaymentMethodInfoBuilder
     */
    private $paymentMethodInfo;

    /**

     * @var null|PaymentStatusDraft|PaymentStatusDraftBuilder
     */
    private $paymentStatus;

    /**

     * @var ?TransactionDraftCollection
     */
    private $transactions;

    /**

     * @var ?CustomFieldsDraftCollection
     */
    private $interfaceInteractions;

    /**

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>Reference to a <a href="ctp:api:type:Customer">Customer</a> associated with the Payment.</p>
     *

     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p><a href="ctp:api:type:AnonymousSession">Anonymous session</a> associated with the Payment.</p>
     *

     * @return null|string
     */
    public function getAnonymousId()
    {
        return $this->anonymousId;
    }

    /**
     * <p>Identifier used by the payment service that processes the Payment (for example, a PSP).
     * The combination of <code>interfaceId</code> and the <code>paymentInterface</code> field on <a href="ctp:api:type:PaymentMethodInfo">PaymentMethodInfo</a> must be unique.
     * Once set, it cannot be changed.</p>
     *

     * @return null|string
     */
    public function getInterfaceId()
    {
        return $this->interfaceId;
    }

    /**
     * <p>Money value the Payment intends to receive from the customer.
     * The value typically matches the <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a> gross total.</p>
     *

     * @return null|Money
     */
    public function getAmountPlanned()
    {
        return $this->amountPlanned instanceof MoneyBuilder ? $this->amountPlanned->build() : $this->amountPlanned;
    }

    /**
     * <p>Information regarding the payment interface (for example, a PSP), and the specific payment method used.</p>
     *

     * @return null|PaymentMethodInfo
     */
    public function getPaymentMethodInfo()
    {
        return $this->paymentMethodInfo instanceof PaymentMethodInfoBuilder ? $this->paymentMethodInfo->build() : $this->paymentMethodInfo;
    }

    /**
     * <p>Current status of the Payment.</p>
     *

     * @return null|PaymentStatusDraft
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus instanceof PaymentStatusDraftBuilder ? $this->paymentStatus->build() : $this->paymentStatus;
    }

    /**
     * <p>Financial transactions of the Payment. Each Transaction has a <a href="ctp:api:type:TransactionType">TransactionType</a> and a <a href="ctp:api:type:TransactionState">TransactionState</a>.</p>
     *

     * @return null|TransactionDraftCollection
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * <p>Represents information exchange with the payment service, for example, a PSP. An interaction may be a request sent, or a response or notification received from the payment service.</p>
     *

     * @return null|CustomFieldsDraftCollection
     */
    public function getInterfaceInteractions()
    {
        return $this->interfaceInteractions;
    }

    /**
     * <p>Custom Fields for the Payment.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>User-defined unique identifier for the Payment.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param ?CustomerResourceIdentifier $customer
     * @return $this
     */
    public function withCustomer(?CustomerResourceIdentifier $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @param ?string $anonymousId
     * @return $this
     */
    public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;

        return $this;
    }

    /**
     * @param ?string $interfaceId
     * @return $this
     */
    public function withInterfaceId(?string $interfaceId)
    {
        $this->interfaceId = $interfaceId;

        return $this;
    }

    /**
     * @param ?Money $amountPlanned
     * @return $this
     */
    public function withAmountPlanned(?Money $amountPlanned)
    {
        $this->amountPlanned = $amountPlanned;

        return $this;
    }

    /**
     * @param ?PaymentMethodInfo $paymentMethodInfo
     * @return $this
     */
    public function withPaymentMethodInfo(?PaymentMethodInfo $paymentMethodInfo)
    {
        $this->paymentMethodInfo = $paymentMethodInfo;

        return $this;
    }

    /**
     * @param ?PaymentStatusDraft $paymentStatus
     * @return $this
     */
    public function withPaymentStatus(?PaymentStatusDraft $paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * @param ?TransactionDraftCollection $transactions
     * @return $this
     */
    public function withTransactions(?TransactionDraftCollection $transactions)
    {
        $this->transactions = $transactions;

        return $this;
    }

    /**
     * @param ?CustomFieldsDraftCollection $interfaceInteractions
     * @return $this
     */
    public function withInterfaceInteractions(?CustomFieldsDraftCollection $interfaceInteractions)
    {
        $this->interfaceInteractions = $interfaceInteractions;

        return $this;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?CustomerResourceIdentifierBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @deprecated use withAmountPlanned() instead
     * @return $this
     */
    public function withAmountPlannedBuilder(?MoneyBuilder $amountPlanned)
    {
        $this->amountPlanned = $amountPlanned;

        return $this;
    }

    /**
     * @deprecated use withPaymentMethodInfo() instead
     * @return $this
     */
    public function withPaymentMethodInfoBuilder(?PaymentMethodInfoBuilder $paymentMethodInfo)
    {
        $this->paymentMethodInfo = $paymentMethodInfo;

        return $this;
    }

    /**
     * @deprecated use withPaymentStatus() instead
     * @return $this
     */
    public function withPaymentStatusBuilder(?PaymentStatusDraftBuilder $paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): PaymentDraft
    {
        return new PaymentDraftModel(
            $this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer,
            $this->anonymousId,
            $this->interfaceId,
            $this->amountPlanned instanceof MoneyBuilder ? $this->amountPlanned->build() : $this->amountPlanned,
            $this->paymentMethodInfo instanceof PaymentMethodInfoBuilder ? $this->paymentMethodInfo->build() : $this->paymentMethodInfo,
            $this->paymentStatus instanceof PaymentStatusDraftBuilder ? $this->paymentStatus->build() : $this->paymentStatus,
            $this->transactions,
            $this->interfaceInteractions,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom,
            $this->key
        );
    }

    public static function of(): PaymentDraftBuilder
    {
        return new self();
    }
}
