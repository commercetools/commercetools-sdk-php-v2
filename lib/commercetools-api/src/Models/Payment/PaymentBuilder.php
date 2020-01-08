<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Api\Models\Type\CustomFieldsCollection;
use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<Payment>
 */
final class PaymentBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**
     * @var LastModifiedBy|?LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**
     * @var CreatedBy|?CreatedByBuilder
     */
    private $createdBy;

    /**
     * @var CustomerReference|?CustomerReferenceBuilder
     */
    private $customer;

    /**
     * @var ?string
     */
    private $anonymousId;

    /**
     * @var ?string
     */
    private $externalId;

    /**
     * @var ?string
     */
    private $interfaceId;

    /**
     * @var TypedMoney|?TypedMoneyBuilder
     */
    private $amountPlanned;

    /**
     * @var TypedMoney|?TypedMoneyBuilder
     */
    private $amountAuthorized;

    /**
     * @var ?string
     */
    private $authorizedUntil;

    /**
     * @var TypedMoney|?TypedMoneyBuilder
     */
    private $amountPaid;

    /**
     * @var TypedMoney|?TypedMoneyBuilder
     */
    private $amountRefunded;

    /**
     * @var PaymentMethodInfo|?PaymentMethodInfoBuilder
     */
    private $paymentMethodInfo;

    /**
     * @var PaymentStatus|?PaymentStatusBuilder
     */
    private $paymentStatus;

    /**
     * @var ?TransactionCollection
     */
    private $transactions;

    /**
     * @var ?CustomFieldsCollection
     */
    private $interfaceInteractions;

    /**
     * @var CustomFields|?CustomFieldsBuilder
     */
    private $custom;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>.
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>.
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * <p>A reference to the customer this payment belongs to.</p>.
     *
     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p>Identifies payments belonging to an anonymous session (the customer has not signed up/in yet).</p>.
     *
     * @return null|string
     */
    public function getAnonymousId()
    {
        return $this->anonymousId;
    }

    /**
     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * <p>The identifier that is used by the interface that manages the payment (usually the PSP).
     * Cannot be changed once it has been set.
     * The combination of this ID and the PaymentMethodInfo <code>paymentInterface</code> must be unique.</p>.
     *
     * @return null|string
     */
    public function getInterfaceId()
    {
        return $this->interfaceId;
    }

    /**
     * <p>How much money this payment intends to receive from the customer.
     * The value usually matches the cart or order gross total.</p>.
     *
     * @return null|TypedMoney
     */
    public function getAmountPlanned()
    {
        return $this->amountPlanned instanceof TypedMoneyBuilder ? $this->amountPlanned->build() : $this->amountPlanned;
    }

    /**
     * @return null|TypedMoney
     */
    public function getAmountAuthorized()
    {
        return $this->amountAuthorized instanceof TypedMoneyBuilder ? $this->amountAuthorized->build() : $this->amountAuthorized;
    }

    /**
     * @return null|string
     */
    public function getAuthorizedUntil()
    {
        return $this->authorizedUntil;
    }

    /**
     * @return null|TypedMoney
     */
    public function getAmountPaid()
    {
        return $this->amountPaid instanceof TypedMoneyBuilder ? $this->amountPaid->build() : $this->amountPaid;
    }

    /**
     * @return null|TypedMoney
     */
    public function getAmountRefunded()
    {
        return $this->amountRefunded instanceof TypedMoneyBuilder ? $this->amountRefunded->build() : $this->amountRefunded;
    }

    /**
     * @return null|PaymentMethodInfo
     */
    public function getPaymentMethodInfo()
    {
        return $this->paymentMethodInfo instanceof PaymentMethodInfoBuilder ? $this->paymentMethodInfo->build() : $this->paymentMethodInfo;
    }

    /**
     * @return null|PaymentStatus
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus instanceof PaymentStatusBuilder ? $this->paymentStatus->build() : $this->paymentStatus;
    }

    /**
     * <p>A list of financial transactions of different TransactionTypes with different TransactionStates.</p>.
     *
     * @return null|TransactionCollection
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * <p>Interface interactions can be requests sent to the PSP, responses received from the PSP or notifications received from the PSP.
     * Some interactions may result in a transaction.
     * If so, the <code>interactionId</code> in the Transaction should be set to match the ID of the PSP for the interaction.
     * Interactions are managed by the PSP integration and are usually neither written nor read by the user facing frontends or other services.</p>.
     *
     * @return null|CustomFieldsCollection
     */
    public function getInterfaceInteractions()
    {
        return $this->interfaceInteractions;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>User-specific unique identifier for the payment (max.
     * 256 characters).</p>.
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomer(?CustomerReference $customer)
    {
        $this->customer = $customer;

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
    public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;

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
    public function withAmountPlanned(?TypedMoney $amountPlanned)
    {
        $this->amountPlanned = $amountPlanned;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmountAuthorized(?TypedMoney $amountAuthorized)
    {
        $this->amountAuthorized = $amountAuthorized;

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
    public function withAmountPaid(?TypedMoney $amountPaid)
    {
        $this->amountPaid = $amountPaid;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmountRefunded(?TypedMoney $amountRefunded)
    {
        $this->amountRefunded = $amountRefunded;

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
    public function withPaymentStatus(?PaymentStatus $paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTransactions(?TransactionCollection $transactions)
    {
        $this->transactions = $transactions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withInterfaceInteractions(?CustomFieldsCollection $interfaceInteractions)
    {
        $this->interfaceInteractions = $interfaceInteractions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

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
    public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerBuilder(?CustomerReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmountPlannedBuilder(?TypedMoneyBuilder $amountPlanned)
    {
        $this->amountPlanned = $amountPlanned;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmountAuthorizedBuilder(?TypedMoneyBuilder $amountAuthorized)
    {
        $this->amountAuthorized = $amountAuthorized;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmountPaidBuilder(?TypedMoneyBuilder $amountPaid)
    {
        $this->amountPaid = $amountPaid;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAmountRefundedBuilder(?TypedMoneyBuilder $amountRefunded)
    {
        $this->amountRefunded = $amountRefunded;

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
    public function withPaymentStatusBuilder(?PaymentStatusBuilder $paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): Payment
    {
        return new PaymentModel(
            $this->id,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt,
            ($this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy),
            ($this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy),
            ($this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer),
            $this->anonymousId,
            $this->externalId,
            $this->interfaceId,
            ($this->amountPlanned instanceof TypedMoneyBuilder ? $this->amountPlanned->build() : $this->amountPlanned),
            ($this->amountAuthorized instanceof TypedMoneyBuilder ? $this->amountAuthorized->build() : $this->amountAuthorized),
            $this->authorizedUntil,
            ($this->amountPaid instanceof TypedMoneyBuilder ? $this->amountPaid->build() : $this->amountPaid),
            ($this->amountRefunded instanceof TypedMoneyBuilder ? $this->amountRefunded->build() : $this->amountRefunded),
            ($this->paymentMethodInfo instanceof PaymentMethodInfoBuilder ? $this->paymentMethodInfo->build() : $this->paymentMethodInfo),
            ($this->paymentStatus instanceof PaymentStatusBuilder ? $this->paymentStatus->build() : $this->paymentStatus),
            $this->transactions,
            $this->interfaceInteractions,
            ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom),
            $this->key
        );
    }

    public static function of(): PaymentBuilder
    {
        return new self();
    }
}
