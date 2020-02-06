<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsCollection;
use DateTimeImmutable;

interface Payment extends BaseResource
{
    const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    const FIELD_CREATED_BY = 'createdBy';
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
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>A reference to the customer this payment belongs to.</p>
     *
     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * <p>Identifies payments belonging to an anonymous session (the customer has not signed up/in yet).</p>
     *
     * @return null|string
     */
    public function getAnonymousId();

    /**
     * @return null|string
     */
    public function getExternalId();

    /**
     * <p>The identifier that is used by the interface that manages the payment (usually the PSP).
     * Cannot be changed once it has been set.
     * The combination of this ID and the PaymentMethodInfo <code>paymentInterface</code> must be unique.</p>
     *
     * @return null|string
     */
    public function getInterfaceId();

    /**
     * <p>How much money this payment intends to receive from the customer.
     * The value usually matches the cart or order gross total.</p>
     *
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
     * <p>A list of financial transactions of different TransactionTypes with different TransactionStates.</p>
     *
     * @return null|TransactionCollection
     */
    public function getTransactions();

    /**
     * <p>Interface interactions can be requests sent to the PSP, responses received from the PSP or notifications received from the PSP.
     * Some interactions may result in a transaction.
     * If so, the <code>interactionId</code> in the Transaction should be set to match the ID of the PSP for the interaction.
     * Interactions are managed by the PSP integration and are usually neither written nor read by the user facing frontends or other services.</p>
     *
     * @return null|CustomFieldsCollection
     */
    public function getInterfaceInteractions();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>User-specific unique identifier for the payment (max.
     * 256 characters).</p>
     *
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
