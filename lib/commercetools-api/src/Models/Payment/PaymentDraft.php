<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftCollection;

interface PaymentDraft extends JsonObject
{
    
    const FIELD_CUSTOMER = 'customer';
    const FIELD_ANONYMOUS_ID = 'anonymousId';
    const FIELD_EXTERNAL_ID = 'externalId';
    const FIELD_INTERFACE_ID = 'interfaceId';
    const FIELD_AMOUNT_PLANNED = 'amountPlanned';
    const FIELD_AMOUNT_AUTHORIZED = 'amountAuthorized';
    const FIELD_AUTHORIZED_UNTIL = 'authorizedUntil';
    const FIELD_AMOUNT_PAID = 'amountPaid';
    const FIELD_AMOUNT_REFUNDED = 'amountRefunded';
    const FIELD_PAYMENT_METHOD_INFO = 'paymentMethodInfo';
    const FIELD_PAYMENT_STATUS = 'paymentStatus';
    const FIELD_TRANSACTIONS = 'transactions';
    const FIELD_INTERFACE_INTERACTIONS = 'interfaceInteractions';
    const FIELD_CUSTOM = 'custom';
    const FIELD_KEY = 'key';

    /**
     *
     * @return CustomerResourceIdentifier|null
     */
    public function getCustomer();
    
    /**
     *
     * @return string|null
     */
    public function getAnonymousId();
    
    /**
     *
     * @return string|null
     */
    public function getExternalId();
    
    /**
     *
     * @return string|null
     */
    public function getInterfaceId();
    
    /**
     *
     * @return Money|null
     */
    public function getAmountPlanned();
    
    /**
     *
     * @return Money|null
     */
    public function getAmountAuthorized();
    
    /**
     *
     * @return string|null
     */
    public function getAuthorizedUntil();
    
    /**
     *
     * @return Money|null
     */
    public function getAmountPaid();
    
    /**
     *
     * @return Money|null
     */
    public function getAmountRefunded();
    
    /**
     *
     * @return PaymentMethodInfo|null
     */
    public function getPaymentMethodInfo();
    
    /**
     *
     * @return PaymentStatusDraft|null
     */
    public function getPaymentStatus();
    
    /**
     *
     * @return TransactionDraftCollection|null
     */
    public function getTransactions();
    
    /**
     *
     * @return CustomFieldsDraftCollection|null
     */
    public function getInterfaceInteractions();
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    public function getCustom();
    
    /**
     *
     * @return string|null
     */
    public function getKey();
    public function setCustomer(?CustomerResourceIdentifier $customer): void;
    
    public function setAnonymousId(?string $anonymousId): void;
    
    public function setExternalId(?string $externalId): void;
    
    public function setInterfaceId(?string $interfaceId): void;
    
    public function setAmountPlanned(?Money $amountPlanned): void;
    
    public function setAmountAuthorized(?Money $amountAuthorized): void;
    
    public function setAuthorizedUntil(?string $authorizedUntil): void;
    
    public function setAmountPaid(?Money $amountPaid): void;
    
    public function setAmountRefunded(?Money $amountRefunded): void;
    
    public function setPaymentMethodInfo(?PaymentMethodInfo $paymentMethodInfo): void;
    
    public function setPaymentStatus(?PaymentStatusDraft $paymentStatus): void;
    
    public function setTransactions(?TransactionDraftCollection $transactions): void;
    
    public function setInterfaceInteractions(?CustomFieldsDraftCollection $interfaceInteractions): void;
    
    public function setCustom(?CustomFieldsDraft $custom): void;
    
    public function setKey(?string $key): void;
}