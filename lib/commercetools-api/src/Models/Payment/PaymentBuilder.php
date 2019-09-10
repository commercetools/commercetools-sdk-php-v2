<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByBuilder;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByBuilder;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\LoggedResourceBuilder;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Api\Models\Type\CustomFieldsCollection;
use DateTimeImmutable;

/**
 * @implements Builder<Payment>
 */
final class PaymentBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?int
     */
    protected $version;
    
    /**
     * @var ?CreatedByBuilder|CreatedBy
     */
    protected $createdBy;
    
    /**
     * @var ?LastModifiedByBuilder|LastModifiedBy
     */
    protected $lastModifiedBy;
    
    /**
     * @var ?TypedMoneyBuilder|TypedMoney
     */
    protected $amountAuthorized;
    
    /**
     * @var ?string
     */
    protected $anonymousId;
    
    /**
     * @var ?PaymentMethodInfoBuilder|PaymentMethodInfo
     */
    protected $paymentMethodInfo;
    
    /**
     * @var ?CustomFieldsBuilder|CustomFields
     */
    protected $custom;
    
    /**
     * @var ?string
     */
    protected $authorizedUntil;
    
    /**
     * @var ?string
     */
    protected $externalId;
    
    /**
     * @var ?TransactionCollection
     */
    protected $transactions;
    
    /**
     * @var ?TypedMoneyBuilder|TypedMoney
     */
    protected $amountPaid;
    
    /**
     * @var ?TypedMoneyBuilder|TypedMoney
     */
    protected $amountRefunded;
    
    /**
     * @var ?TypedMoneyBuilder|TypedMoney
     */
    protected $amountPlanned;
    
    /**
     * @var ?CustomFieldsCollection
     */
    protected $interfaceInteractions;
    
    /**
     * @var ?string
     */
    protected $interfaceId;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?PaymentStatusBuilder|PaymentStatus
     */
    protected $paymentStatus;
    
    /**
     * @var ?CustomerReferenceBuilder|CustomerReference
     */
    protected $customer;

    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       return $this->createdAt;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getLastModifiedAt()
    {
       return $this->lastModifiedAt;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       return $this->id;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       return $this->version;
    }
    
    /**
     *
     * @return CreatedBy|null
     */
    final public function getCreatedBy()
    {
       return ($this->createdBy instanceof CreatedByBuilder ? $this->createdBy->build() : $this->createdBy);
    }
    
    /**
     *
     * @return LastModifiedBy|null
     */
    final public function getLastModifiedBy()
    {
       return ($this->lastModifiedBy instanceof LastModifiedByBuilder ? $this->lastModifiedBy->build() : $this->lastModifiedBy);
    }
    
    /**
     *
     * @return TypedMoney|null
     */
    final public function getAmountAuthorized()
    {
       return ($this->amountAuthorized instanceof TypedMoneyBuilder ? $this->amountAuthorized->build() : $this->amountAuthorized);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAnonymousId()
    {
       return $this->anonymousId;
    }
    
    /**
     *
     * @return PaymentMethodInfo|null
     */
    final public function getPaymentMethodInfo()
    {
       return ($this->paymentMethodInfo instanceof PaymentMethodInfoBuilder ? $this->paymentMethodInfo->build() : $this->paymentMethodInfo);
    }
    
    /**
     *
     * @return CustomFields|null
     */
    final public function getCustom()
    {
       return ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAuthorizedUntil()
    {
       return $this->authorizedUntil;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getExternalId()
    {
       return $this->externalId;
    }
    
    /**
     *
     * @return TransactionCollection|null
     */
    final public function getTransactions()
    {
       return $this->transactions;
    }
    
    /**
     *
     * @return TypedMoney|null
     */
    final public function getAmountPaid()
    {
       return ($this->amountPaid instanceof TypedMoneyBuilder ? $this->amountPaid->build() : $this->amountPaid);
    }
    
    /**
     *
     * @return TypedMoney|null
     */
    final public function getAmountRefunded()
    {
       return ($this->amountRefunded instanceof TypedMoneyBuilder ? $this->amountRefunded->build() : $this->amountRefunded);
    }
    
    /**
     *
     * @return TypedMoney|null
     */
    final public function getAmountPlanned()
    {
       return ($this->amountPlanned instanceof TypedMoneyBuilder ? $this->amountPlanned->build() : $this->amountPlanned);
    }
    
    /**
     *
     * @return CustomFieldsCollection|null
     */
    final public function getInterfaceInteractions()
    {
       return $this->interfaceInteractions;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getInterfaceId()
    {
       return $this->interfaceId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       return $this->key;
    }
    
    /**
     *
     * @return PaymentStatus|null
     */
    final public function getPaymentStatus()
    {
       return ($this->paymentStatus instanceof PaymentStatusBuilder ? $this->paymentStatus->build() : $this->paymentStatus);
    }
    
    /**
     *
     * @return CustomerReference|null
     */
    final public function getCustomer()
    {
       return ($this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer);
    }
    /**
     * @return $this
     */
    final public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withId(?string $id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVersion(?int $version)
    {
        $this->version = $version;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCreatedBy(?CreatedBy $createdBy)
    {
        $this->createdBy = $createdBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastModifiedBy(?LastModifiedBy $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAmountAuthorized(?TypedMoney $amountAuthorized)
    {
        $this->amountAuthorized = $amountAuthorized;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPaymentMethodInfo(?PaymentMethodInfo $paymentMethodInfo)
    {
        $this->paymentMethodInfo = $paymentMethodInfo;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAuthorizedUntil(?string $authorizedUntil)
    {
        $this->authorizedUntil = $authorizedUntil;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTransactions(?TransactionCollection $transactions)
    {
        $this->transactions = $transactions;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAmountPaid(?TypedMoney $amountPaid)
    {
        $this->amountPaid = $amountPaid;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAmountRefunded(?TypedMoney $amountRefunded)
    {
        $this->amountRefunded = $amountRefunded;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAmountPlanned(?TypedMoney $amountPlanned)
    {
        $this->amountPlanned = $amountPlanned;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withInterfaceInteractions(?CustomFieldsCollection $interfaceInteractions)
    {
        $this->interfaceInteractions = $interfaceInteractions;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withInterfaceId(?string $interfaceId)
    {
        $this->interfaceId = $interfaceId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withKey(?string $key)
    {
        $this->key = $key;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPaymentStatus(?PaymentStatus $paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomer(?CustomerReference $customer)
    {
        $this->customer = $customer;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withCreatedByBuilder(?CreatedByBuilder $createdBy)
    {
        $this->createdBy = $createdBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLastModifiedByBuilder(?LastModifiedByBuilder $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAmountAuthorizedBuilder(?TypedMoneyBuilder $amountAuthorized)
    {
        $this->amountAuthorized = $amountAuthorized;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPaymentMethodInfoBuilder(?PaymentMethodInfoBuilder $paymentMethodInfo)
    {
        $this->paymentMethodInfo = $paymentMethodInfo;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAmountPaidBuilder(?TypedMoneyBuilder $amountPaid)
    {
        $this->amountPaid = $amountPaid;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAmountRefundedBuilder(?TypedMoneyBuilder $amountRefunded)
    {
        $this->amountRefunded = $amountRefunded;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAmountPlannedBuilder(?TypedMoneyBuilder $amountPlanned)
    {
        $this->amountPlanned = $amountPlanned;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPaymentStatusBuilder(?PaymentStatusBuilder $paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerBuilder(?CustomerReferenceBuilder $customer)
    {
        $this->customer = $customer;
        
        return $this;
    }
    
    public function build(): Payment {
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