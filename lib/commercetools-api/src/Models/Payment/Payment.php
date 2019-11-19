<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsCollection;
use DateTimeImmutable;

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
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * @return null|CustomerReference
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
     * @return null|TypedMoney
     */
    public function getAmountPlanned();

    /**
     * @return null|TypedMoney
     */
    public function getAmountAuthorized();

    /**
     * @return null|string
     */
    public function getAuthorizedUntil();

    /**
     * @return null|TypedMoney
     */
    public function getAmountPaid();

    /**
     * @return null|TypedMoney
     */
    public function getAmountRefunded();

    /**
     * @return null|PaymentMethodInfo
     */
    public function getPaymentMethodInfo();

    /**
     * @return null|PaymentStatus
     */
    public function getPaymentStatus();

    /**
     * @return null|TransactionCollection
     */
    public function getTransactions();

    /**
     * @return null|CustomFieldsCollection
     */
    public function getInterfaceInteractions();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @return null|string
     */
    public function getKey();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

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
