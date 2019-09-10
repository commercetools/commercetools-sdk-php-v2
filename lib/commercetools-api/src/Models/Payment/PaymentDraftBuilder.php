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
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraftCollection;

/**
 * @implements Builder<PaymentDraft>
 */
final class PaymentDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?MoneyBuilder|Money
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
     * @var ?CustomFieldsDraftBuilder|CustomFieldsDraft
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
     * @var ?TransactionDraftCollection
     */
    protected $transactions;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $amountPaid;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $amountRefunded;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $amountPlanned;
    
    /**
     * @var ?CustomFieldsDraftCollection
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
     * @var ?PaymentStatusDraftBuilder|PaymentStatusDraft
     */
    protected $paymentStatus;
    
    /**
     * @var ?CustomerResourceIdentifierBuilder|CustomerResourceIdentifier
     */
    protected $customer;

    /**
     *
     * @return Money|null
     */
    final public function getAmountAuthorized()
    {
       return ($this->amountAuthorized instanceof MoneyBuilder ? $this->amountAuthorized->build() : $this->amountAuthorized);
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
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       return ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom);
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
     * @return TransactionDraftCollection|null
     */
    final public function getTransactions()
    {
       return $this->transactions;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getAmountPaid()
    {
       return ($this->amountPaid instanceof MoneyBuilder ? $this->amountPaid->build() : $this->amountPaid);
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getAmountRefunded()
    {
       return ($this->amountRefunded instanceof MoneyBuilder ? $this->amountRefunded->build() : $this->amountRefunded);
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getAmountPlanned()
    {
       return ($this->amountPlanned instanceof MoneyBuilder ? $this->amountPlanned->build() : $this->amountPlanned);
    }
    
    /**
     *
     * @return CustomFieldsDraftCollection|null
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
     * @return PaymentStatusDraft|null
     */
    final public function getPaymentStatus()
    {
       return ($this->paymentStatus instanceof PaymentStatusDraftBuilder ? $this->paymentStatus->build() : $this->paymentStatus);
    }
    
    /**
     *
     * @return CustomerResourceIdentifier|null
     */
    final public function getCustomer()
    {
       return ($this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer);
    }
    /**
     * @return $this
     */
    final public function withAmountAuthorized(?Money $amountAuthorized)
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
    final public function withCustom(?CustomFieldsDraft $custom)
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
    final public function withTransactions(?TransactionDraftCollection $transactions)
    {
        $this->transactions = $transactions;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAmountPaid(?Money $amountPaid)
    {
        $this->amountPaid = $amountPaid;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAmountRefunded(?Money $amountRefunded)
    {
        $this->amountRefunded = $amountRefunded;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAmountPlanned(?Money $amountPlanned)
    {
        $this->amountPlanned = $amountPlanned;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withInterfaceInteractions(?CustomFieldsDraftCollection $interfaceInteractions)
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
    final public function withPaymentStatus(?PaymentStatusDraft $paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomer(?CustomerResourceIdentifier $customer)
    {
        $this->customer = $customer;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withAmountAuthorizedBuilder(?MoneyBuilder $amountAuthorized)
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
    final public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAmountPaidBuilder(?MoneyBuilder $amountPaid)
    {
        $this->amountPaid = $amountPaid;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAmountRefundedBuilder(?MoneyBuilder $amountRefunded)
    {
        $this->amountRefunded = $amountRefunded;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAmountPlannedBuilder(?MoneyBuilder $amountPlanned)
    {
        $this->amountPlanned = $amountPlanned;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPaymentStatusBuilder(?PaymentStatusDraftBuilder $paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomerBuilder(?CustomerResourceIdentifierBuilder $customer)
    {
        $this->customer = $customer;
        
        return $this;
    }
    
    public function build(): PaymentDraft {
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