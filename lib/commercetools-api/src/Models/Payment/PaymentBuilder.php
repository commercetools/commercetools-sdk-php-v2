<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceBuilder;
use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Api\Models\Common\CentPrecisionMoneyBuilder;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Api\Models\Type\CustomFieldsCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

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

     * @var null|LastModifiedBy|LastModifiedByBuilder
     */
    private $lastModifiedBy;

    /**

     * @var null|CreatedBy|CreatedByBuilder
     */
    private $createdBy;

    /**

     * @var null|CustomerReference|CustomerReferenceBuilder
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

     * @var null|CentPrecisionMoney|CentPrecisionMoneyBuilder
     */
    private $amountPlanned;

    /**

     * @var null|PaymentMethodInfo|PaymentMethodInfoBuilder
     */
    private $paymentMethodInfo;

    /**

     * @var null|PaymentStatus|PaymentStatusBuilder
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

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>Unique identifier of the Payment.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current version of the Payment.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Date and time (UTC) the Payment was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date and time (UTC) the Payment was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/general-concepts#events-tracked">events not tracked</a>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/general-concepts#events-tracked">events not tracked</a>.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy;
    }

    /**
     * <p>Reference to a <a href="ctp:api:type:Customer">Customer</a> associated with the Payment.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer;
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
     * The combination of <code>interfaceId</code> and the <code>paymentInterface</code> field on <a href="ctp:api:type:PaymentMethodInfo">PaymentMethodInfo</a> must be unique.</p>
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

     * @return null|CentPrecisionMoney
     */
    public function getAmountPlanned()
    {
        return $this->amountPlanned instanceof CentPrecisionMoneyBuilder ? $this->amountPlanned->build() : $this->amountPlanned;
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

     * @return null|PaymentStatus
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus instanceof PaymentStatusBuilder ? $this->paymentStatus->build() : $this->paymentStatus;
    }

    /**
     * <p>Financial transactions of the Payment. Each Transaction has a <a href="ctp:api:type:TransactionType">TransactionType</a> and a <a href="ctp:api:type:TransactionState">TransactionState</a>.</p>
     *

     * @return null|TransactionCollection
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * <p>Represents information exchange with the payment service, for example, a PSP. An interaction may be a request sent, or a response or notification received from the payment service.</p>
     *

     * @return null|CustomFieldsCollection
     */
    public function getInterfaceInteractions()
    {
        return $this->interfaceInteractions;
    }

    /**
     * <p>Custom Fields for the Payment.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * <p>User-defined unique identifier of the Payment.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     * @return $this
     */
    public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @param ?CreatedBy $createdBy
     * @return $this
     */
    public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @param ?CustomerReference $customer
     * @return $this
     */
    public function withCustomer(?CustomerReference $customer)
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
     * @param ?CentPrecisionMoney $amountPlanned
     * @return $this
     */
    public function withAmountPlanned(?CentPrecisionMoney $amountPlanned)
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
     * @param ?PaymentStatus $paymentStatus
     * @return $this
     */
    public function withPaymentStatus(?PaymentStatus $paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * @param ?TransactionCollection $transactions
     * @return $this
     */
    public function withTransactions(?TransactionCollection $transactions)
    {
        $this->transactions = $transactions;

        return $this;
    }

    /**
     * @param ?CustomFieldsCollection $interfaceInteractions
     * @return $this
     */
    public function withInterfaceInteractions(?CustomFieldsCollection $interfaceInteractions)
    {
        $this->interfaceInteractions = $interfaceInteractions;

        return $this;
    }

    /**
     * @param ?CustomFields $custom
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
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
     * @deprecated use withLastModifiedBy() instead
     * @return $this
     */
    public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    /**
     * @deprecated use withCreatedBy() instead
     * @return $this
     */
    public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?CustomerReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @deprecated use withAmountPlanned() instead
     * @return $this
     */
    public function withAmountPlannedBuilder(?CentPrecisionMoneyBuilder $amountPlanned)
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
    public function withPaymentStatusBuilder(?PaymentStatusBuilder $paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
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
            $this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy,
            $this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy,
            $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer,
            $this->anonymousId,
            $this->interfaceId,
            $this->amountPlanned instanceof CentPrecisionMoneyBuilder ? $this->amountPlanned->build() : $this->amountPlanned,
            $this->paymentMethodInfo instanceof PaymentMethodInfoBuilder ? $this->paymentMethodInfo->build() : $this->paymentMethodInfo,
            $this->paymentStatus instanceof PaymentStatusBuilder ? $this->paymentStatus->build() : $this->paymentStatus,
            $this->transactions,
            $this->interfaceInteractions,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom,
            $this->key
        );
    }

    public static function of(): PaymentBuilder
    {
        return new self();
    }
}
