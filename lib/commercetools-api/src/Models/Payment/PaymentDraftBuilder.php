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
     * @deprecated
     * @var ?string
     */
    private $externalId;

    /**

     * @var ?string
     */
    private $interfaceId;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $amountPlanned;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $amountAuthorized;

    /**

     * @var ?string
     */
    private $authorizedUntil;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $amountPaid;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $amountRefunded;

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
     * <p>A reference to the customer this payment belongs to.</p>
     *

     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p>Identifies payments belonging to an anonymous session (the customer has not signed up/in yet).</p>
     *

     * @return null|string
     */
    public function getAnonymousId()
    {
        return $this->anonymousId;
    }

    /**
     * @deprecated
     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * <p>The identifier that is used by the interface that manages the payment (usually the PSP).
     * Cannot be changed once it has been set.
     * The combination of this ID and the PaymentMethodInfo <code>paymentInterface</code> must be unique.</p>
     *

     * @return null|string
     */
    public function getInterfaceId()
    {
        return $this->interfaceId;
    }

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
     * <p>Draft type that stores amounts in cent precision for the specified currency.</p>
     * <p>For storing money values in fractions of the minor unit in a currency, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a> instead.</p>
     *

     * @return null|Money
     */
    public function getAmountAuthorized()
    {
        return $this->amountAuthorized instanceof MoneyBuilder ? $this->amountAuthorized->build() : $this->amountAuthorized;
    }

    /**

     * @return null|string
     */
    public function getAuthorizedUntil()
    {
        return $this->authorizedUntil;
    }

    /**
     * <p>Draft type that stores amounts in cent precision for the specified currency.</p>
     * <p>For storing money values in fractions of the minor unit in a currency, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a> instead.</p>
     *

     * @return null|Money
     */
    public function getAmountPaid()
    {
        return $this->amountPaid instanceof MoneyBuilder ? $this->amountPaid->build() : $this->amountPaid;
    }

    /**
     * <p>Draft type that stores amounts in cent precision for the specified currency.</p>
     * <p>For storing money values in fractions of the minor unit in a currency, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a> instead.</p>
     *

     * @return null|Money
     */
    public function getAmountRefunded()
    {
        return $this->amountRefunded instanceof MoneyBuilder ? $this->amountRefunded->build() : $this->amountRefunded;
    }

    /**

     * @return null|PaymentMethodInfo
     */
    public function getPaymentMethodInfo()
    {
        return $this->paymentMethodInfo instanceof PaymentMethodInfoBuilder ? $this->paymentMethodInfo->build() : $this->paymentMethodInfo;
    }

    /**

     * @return null|PaymentStatusDraft
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus instanceof PaymentStatusDraftBuilder ? $this->paymentStatus->build() : $this->paymentStatus;
    }

    /**
     * <p>A list of financial transactions of different TransactionTypes with different TransactionStates.</p>
     *

     * @return null|TransactionDraftCollection
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * <p>Interface interactions can be requests send to the PSP, responses received from the PSP or notifications received from the PSP.
     * Some interactions may result in a transaction.
     * If so, the <code>interactionId</code> in the Transaction should be set to match the ID of the PSP for the interaction.
     * Interactions are managed by the PSP integration and are usually neither written nor read by the user facing frontends or other services.</p>
     *

     * @return null|CustomFieldsDraftCollection
     */
    public function getInterfaceInteractions()
    {
        return $this->interfaceInteractions;
    }

    /**

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
     * @param ?string $externalId
     * @return $this
     */
    public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;

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
     * @param ?Money $amountAuthorized
     * @return $this
     */
    public function withAmountAuthorized(?Money $amountAuthorized)
    {
        $this->amountAuthorized = $amountAuthorized;

        return $this;
    }

    /**
     * @param ?string $authorizedUntil
     * @return $this
     */
    public function withAuthorizedUntil(?string $authorizedUntil)
    {
        $this->authorizedUntil = $authorizedUntil;

        return $this;
    }

    /**
     * @param ?Money $amountPaid
     * @return $this
     */
    public function withAmountPaid(?Money $amountPaid)
    {
        $this->amountPaid = $amountPaid;

        return $this;
    }

    /**
     * @param ?Money $amountRefunded
     * @return $this
     */
    public function withAmountRefunded(?Money $amountRefunded)
    {
        $this->amountRefunded = $amountRefunded;

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
     * @deprecated use withAmountAuthorized() instead
     * @return $this
     */
    public function withAmountAuthorizedBuilder(?MoneyBuilder $amountAuthorized)
    {
        $this->amountAuthorized = $amountAuthorized;

        return $this;
    }

    /**
     * @deprecated use withAmountPaid() instead
     * @return $this
     */
    public function withAmountPaidBuilder(?MoneyBuilder $amountPaid)
    {
        $this->amountPaid = $amountPaid;

        return $this;
    }

    /**
     * @deprecated use withAmountRefunded() instead
     * @return $this
     */
    public function withAmountRefundedBuilder(?MoneyBuilder $amountRefunded)
    {
        $this->amountRefunded = $amountRefunded;

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
            $this->externalId,
            $this->interfaceId,
            $this->amountPlanned instanceof MoneyBuilder ? $this->amountPlanned->build() : $this->amountPlanned,
            $this->amountAuthorized instanceof MoneyBuilder ? $this->amountAuthorized->build() : $this->amountAuthorized,
            $this->authorizedUntil,
            $this->amountPaid instanceof MoneyBuilder ? $this->amountPaid->build() : $this->amountPaid,
            $this->amountRefunded instanceof MoneyBuilder ? $this->amountRefunded->build() : $this->amountRefunded,
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
