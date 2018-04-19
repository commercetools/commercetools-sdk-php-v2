<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Type\CustomFieldsDraftCollection;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Customer\CustomerReference;
use Commercetools\Types\Common\Money;

interface PaymentDraft extends JsonObject
{
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
     * @return Money
     */
    public function getAmountPlanned();

    /**
     * @return Money
     */
    public function getAmountAuthorized();

    /**
     * @return string
     */
    public function getAuthorizedUntil();

    /**
     * @return Money
     */
    public function getAmountPaid();

    /**
     * @return Money
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
     * @return TransactionDraftCollection
     */
    public function getTransactions();

    /**
     * @return CustomFieldsDraftCollection
     */
    public function getInterfaceInteractions();

    /**
     * @return CustomFieldsDraft
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
     * @param Money $amountPlanned
     * @return $this
     */
    public function setAmountPlanned(Money $amountPlanned);

    /**
     * @param Money $amountAuthorized
     * @return $this
     */
    public function setAmountAuthorized(Money $amountAuthorized);

    /**
     * @param string $authorizedUntil
     * @return $this
     */
    public function setAuthorizedUntil(string $authorizedUntil);

    /**
     * @param Money $amountPaid
     * @return $this
     */
    public function setAmountPaid(Money $amountPaid);

    /**
     * @param Money $amountRefunded
     * @return $this
     */
    public function setAmountRefunded(Money $amountRefunded);

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
     * @param TransactionDraftCollection $transactions
     * @return $this
     */
    public function setTransactions(TransactionDraftCollection $transactions);

    /**
     * @param CustomFieldsDraftCollection $interfaceInteractions
     * @return $this
     */
    public function setInterfaceInteractions(CustomFieldsDraftCollection $interfaceInteractions);

    /**
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom);

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

}
