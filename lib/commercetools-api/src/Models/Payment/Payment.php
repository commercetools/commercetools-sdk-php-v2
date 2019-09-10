<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsCollection;

interface Payment extends LoggedResource
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
     * @return CustomerReference|null
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
     * @return TypedMoney|null
     */
    public function getAmountPlanned();
    
    /**
     *
     * @return TypedMoney|null
     */
    public function getAmountAuthorized();
    
    /**
     *
     * @return string|null
     */
    public function getAuthorizedUntil();
    
    /**
     *
     * @return TypedMoney|null
     */
    public function getAmountPaid();
    
    /**
     *
     * @return TypedMoney|null
     */
    public function getAmountRefunded();
    
    /**
     *
     * @return PaymentMethodInfo|null
     */
    public function getPaymentMethodInfo();
    
    /**
     *
     * @return PaymentStatus|null
     */
    public function getPaymentStatus();
    
    /**
     *
     * @return TransactionCollection|null
     */
    public function getTransactions();
    
    /**
     *
     * @return CustomFieldsCollection|null
     */
    public function getInterfaceInteractions();
    
    /**
     *
     * @return CustomFields|null
     */
    public function getCustom();
    
    /**
     *
     * @return string|null
     */
    public function getKey();
    public function setCustomer(?CustomerReference $customer): void;
    
    public function setAnonymousId(?string $anonymousId): void;
    
    public function setExternalId(?string $externalId): void;
    
    public function setInterfaceId(?string $interfaceId): void;
    
    public function setAmountPlanned(?TypedMoney $amountPlanned): void;
    
    public function setAmountAuthorized(?TypedMoney $amountAuthorized): void;
    
    public function setAuthorizedUntil(?string $authorizedUntil): void;
    
    public function setAmountPaid(?TypedMoney $amountPaid): void;
    
    public function setAmountRefunded(?TypedMoney $amountRefunded): void;
    
    public function setPaymentMethodInfo(?PaymentMethodInfo $paymentMethodInfo): void;
    
    public function setPaymentStatus(?PaymentStatus $paymentStatus): void;
    
    public function setTransactions(?TransactionCollection $transactions): void;
    
    public function setInterfaceInteractions(?CustomFieldsCollection $interfaceInteractions): void;
    
    public function setCustom(?CustomFields $custom): void;
    
    public function setKey(?string $key): void;
}