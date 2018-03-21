<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Types\Customer\CustomerReference;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Builder\PaymentUpdateBuilder;
use Commercetools\Types\Type\CustomFieldsCollection;
use Commercetools\Types\Common\TypedMoney;
use Commercetools\Types\Common\Resource;

interface Payment extends Resource {
    const FIELD_CUSTOMER = 'customer';
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
     * @return CustomerReference
     */
    public function getCustomer();

    /**
     * @return string
     */
    public function getExternalId();

    /**
     * @return string
     */
    public function getInterfaceId();

    /**
     * @return TypedMoney
     */
    public function getAmountPlanned();

    /**
     * @return TypedMoney
     */
    public function getAmountAuthorized();

    /**
     * @return string
     */
    public function getAuthorizedUntil();

    /**
     * @return TypedMoney
     */
    public function getAmountPaid();

    /**
     * @return TypedMoney
     */
    public function getAmountRefunded();

    /**
     * @return PaymentMethodInfo
     */
    public function getPaymentMethodInfo();

    /**
     * @return PaymentStatus
     */
    public function getPaymentStatus();

    /**
     * @return TransactionCollection
     */
    public function getTransactions();

    /**
     * @return CustomFieldsCollection
     */
    public function getInterfaceInteractions();

    /**
     * @return CustomFields
     */
    public function getCustom();

    /**
     * @return string
     */
    public function getKey();

    /**
     * @param CustomerReference $customer
     * @return $this
     */
    public function setCustomer(CustomerReference $customer);

    /**
     * @param string $externalId
     * @return $this
     */
    public function setExternalId(string $externalId);

    /**
     * @param string $interfaceId
     * @return $this
     */
    public function setInterfaceId(string $interfaceId);

    /**
     * @param TypedMoney $amountPlanned
     * @return $this
     */
    public function setAmountPlanned(TypedMoney $amountPlanned);

    /**
     * @param TypedMoney $amountAuthorized
     * @return $this
     */
    public function setAmountAuthorized(TypedMoney $amountAuthorized);

    /**
     * @param string $authorizedUntil
     * @return $this
     */
    public function setAuthorizedUntil(string $authorizedUntil);

    /**
     * @param TypedMoney $amountPaid
     * @return $this
     */
    public function setAmountPaid(TypedMoney $amountPaid);

    /**
     * @param TypedMoney $amountRefunded
     * @return $this
     */
    public function setAmountRefunded(TypedMoney $amountRefunded);

    /**
     * @param PaymentMethodInfo $paymentMethodInfo
     * @return $this
     */
    public function setPaymentMethodInfo(PaymentMethodInfo $paymentMethodInfo);

    /**
     * @param PaymentStatus $paymentStatus
     * @return $this
     */
    public function setPaymentStatus(PaymentStatus $paymentStatus);

    /**
     * @param TransactionCollection $transactions
     * @return $this
     */
    public function setTransactions(TransactionCollection $transactions);

    /**
     * @param CustomFieldsCollection $interfaceInteractions
     * @return $this
     */
    public function setInterfaceInteractions(CustomFieldsCollection $interfaceInteractions);

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @return PaymentUpdateBuilder
     */
    public function update();
}
