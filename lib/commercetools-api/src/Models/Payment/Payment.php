<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Payment extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';
    public const FIELD_INTERFACE_ID = 'interfaceId';
    public const FIELD_AMOUNT_PLANNED = 'amountPlanned';
    public const FIELD_PAYMENT_METHOD_INFO = 'paymentMethodInfo';
    public const FIELD_PAYMENT_STATUS = 'paymentStatus';
    public const FIELD_TRANSACTIONS = 'transactions';
    public const FIELD_INTERFACE_INTERACTIONS = 'interfaceInteractions';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_KEY = 'key';

    /**
     * <p>Unique identifier of the Payment.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Payment.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the Payment was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the Payment was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>IDs and references that last modified the Payment.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>IDs and references that created the Payment.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>Reference to a <a href="ctp:api:type:Customer">Customer</a> associated with the Payment.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * <p><a href="ctp:api:type:AnonymousSession">Anonymous session</a> associated with the Payment.</p>
     *

     * @return null|string
     */
    public function getAnonymousId();

    /**
     * <p>Identifier used by the payment service that processes the Payment (for example, a PSP).
     * The combination of <code>interfaceId</code> and the <code>paymentInterface</code> field on <a href="ctp:api:type:PaymentMethodInfo">PaymentMethodInfo</a> must be unique.</p>
     *

     * @return null|string
     */
    public function getInterfaceId();

    /**
     * <p>Money value the Payment intends to receive from the customer.
     * The value typically matches the <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a> gross total.</p>
     *

     * @return null|CentPrecisionMoney
     */
    public function getAmountPlanned();

    /**
     * <p>Information regarding the payment interface (for example, a PSP), and the specific payment method used.</p>
     *

     * @return null|PaymentMethodInfo
     */
    public function getPaymentMethodInfo();

    /**
     * <p>Current status of the Payment.</p>
     *

     * @return null|PaymentStatus
     */
    public function getPaymentStatus();

    /**
     * <p>Financial transactions of the Payment. Each Transaction has a <a href="ctp:api:type:TransactionType">TransactionType</a> and a <a href="ctp:api:type:TransactionState">TransactionState</a>.</p>
     *

     * @return null|TransactionCollection
     */
    public function getTransactions();

    /**
     * <p>Represents information exchange with the payment service, for example, a PSP. An interaction may be a request sent, or a response or notification received from the payment service.</p>
     *

     * @return null|CustomFieldsCollection
     */
    public function getInterfaceInteractions();

    /**
     * <p>Custom Fields for the Payment.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>User-defined unique identifier of the Payment.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void;

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void;

    /**
     * @param ?string $interfaceId
     */
    public function setInterfaceId(?string $interfaceId): void;

    /**
     * @param ?CentPrecisionMoney $amountPlanned
     */
    public function setAmountPlanned(?CentPrecisionMoney $amountPlanned): void;

    /**
     * @param ?PaymentMethodInfo $paymentMethodInfo
     */
    public function setPaymentMethodInfo(?PaymentMethodInfo $paymentMethodInfo): void;

    /**
     * @param ?PaymentStatus $paymentStatus
     */
    public function setPaymentStatus(?PaymentStatus $paymentStatus): void;

    /**
     * @param ?TransactionCollection $transactions
     */
    public function setTransactions(?TransactionCollection $transactions): void;

    /**
     * @param ?CustomFieldsCollection $interfaceInteractions
     */
    public function setInterfaceInteractions(?CustomFieldsCollection $interfaceInteractions): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
