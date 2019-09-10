<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftCollection;
use Commercetools\Base\JsonObject;

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
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer();

    /**
     * @return null|string
     */
    public function getAnonymousId();

    /**
     * @return null|string
     */
    public function getExternalId();

    /**
     * @return null|string
     */
    public function getInterfaceId();

    /**
     * @return null|Money
     */
    public function getAmountPlanned();

    /**
     * @return null|Money
     */
    public function getAmountAuthorized();

    /**
     * @return null|string
     */
    public function getAuthorizedUntil();

    /**
     * @return null|Money
     */
    public function getAmountPaid();

    /**
     * @return null|Money
     */
    public function getAmountRefunded();

    /**
     * @return null|PaymentMethodInfo
     */
    public function getPaymentMethodInfo();

    /**
     * @return null|PaymentStatusDraft
     */
    public function getPaymentStatus();

    /**
     * @return null|TransactionDraftCollection
     */
    public function getTransactions();

    /**
     * @return null|CustomFieldsDraftCollection
     */
    public function getInterfaceInteractions();

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return null|string
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
