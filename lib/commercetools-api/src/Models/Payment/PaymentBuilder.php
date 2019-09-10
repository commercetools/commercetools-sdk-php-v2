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
     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @var CreatedBy|?CreatedByBuilder
     */
    private $createdBy;

    /**
     * @var LastModifiedBy|?LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**
     * @var TypedMoney|?TypedMoneyBuilder
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
     * @var CustomFields|?CustomFieldsBuilder
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
     * @var ?TransactionCollection
     */
    private $transactions;

    /**
     * @var TypedMoney|?TypedMoneyBuilder
     */
    private $amountPaid;

    /**
     * @var TypedMoney|?TypedMoneyBuilder
     */
    private $amountRefunded;

    /**
     * @var TypedMoney|?TypedMoneyBuilder
     */
    private $amountPlanned;

    /**
     * @var ?CustomFieldsCollection
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
     * @var PaymentStatus|?PaymentStatusBuilder
     */
    private $paymentStatus;

    /**
     * @var CustomerReference|?CustomerReferenceBuilder
     */
    private $customer;

    public function __construct()
    {
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
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
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
     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
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
     * @return null|TransactionCollection
     */
    public function getTransactions()
    {
        return $this->transactions;
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
     * @return null|TypedMoney
     */
    public function getAmountPlanned()
    {
        return $this->amountPlanned instanceof TypedMoneyBuilder ? $this->amountPlanned->build() : $this->amountPlanned;
    }

    /**
     * @return null|CustomFieldsCollection
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
     * @return null|PaymentStatus
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus instanceof PaymentStatusBuilder ? $this->paymentStatus->build() : $this->paymentStatus;
    }

    /**
     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer;
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
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

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
    public function withAmountAuthorized(?TypedMoney $amountAuthorized)
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
    public function withCustom(?CustomFields $custom)
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
    public function withTransactions(?TransactionCollection $transactions)
    {
        $this->transactions = $transactions;

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
    public function withAmountPlanned(?TypedMoney $amountPlanned)
    {
        $this->amountPlanned = $amountPlanned;

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
    public function withPaymentStatus(?PaymentStatus $paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

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
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

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
    public function withAmountAuthorizedBuilder(?TypedMoneyBuilder $amountAuthorized)
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
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

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
    public function withAmountPlannedBuilder(?TypedMoneyBuilder $amountPlanned)
    {
        $this->amountPlanned = $amountPlanned;

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
    public function withCustomerBuilder(?CustomerReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function build(): Payment
    {
        return new PaymentModel(
            $this->createdAt,
            $this->lastModifiedAt,
            $this->id,
            $this->version,
            ($this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy),
            ($this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy),
            ($this->amountAuthorized instanceof TypedMoneyBuilder ? $this->amountAuthorized->build() : $this->amountAuthorized),
            $this->anonymousId,
            ($this->paymentMethodInfo instanceof PaymentMethodInfoBuilder ? $this->paymentMethodInfo->build() : $this->paymentMethodInfo),
            ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom),
            $this->authorizedUntil,
            $this->externalId,
            $this->transactions,
            ($this->amountPaid instanceof TypedMoneyBuilder ? $this->amountPaid->build() : $this->amountPaid),
            ($this->amountRefunded instanceof TypedMoneyBuilder ? $this->amountRefunded->build() : $this->amountRefunded),
            ($this->amountPlanned instanceof TypedMoneyBuilder ? $this->amountPlanned->build() : $this->amountPlanned),
            $this->interfaceInteractions,
            $this->interfaceId,
            $this->key,
            ($this->paymentStatus instanceof PaymentStatusBuilder ? $this->paymentStatus->build() : $this->paymentStatus),
            ($this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer)
        );
    }

    public static function of(): PaymentBuilder
    {
        return new self();
    }
}
