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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentDraft extends JsonObject
{
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_INTERFACE_ID = 'interfaceId';
    public const FIELD_AMOUNT_PLANNED = 'amountPlanned';
    public const FIELD_AMOUNT_AUTHORIZED = 'amountAuthorized';
    public const FIELD_AUTHORIZED_UNTIL = 'authorizedUntil';
    public const FIELD_AMOUNT_PAID = 'amountPaid';
    public const FIELD_AMOUNT_REFUNDED = 'amountRefunded';
    public const FIELD_PAYMENT_METHOD_INFO = 'paymentMethodInfo';
    public const FIELD_PAYMENT_STATUS = 'paymentStatus';
    public const FIELD_TRANSACTIONS = 'transactions';
    public const FIELD_INTERFACE_INTERACTIONS = 'interfaceInteractions';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_KEY = 'key';

    /**
     * <p>Reference to a <a href="ctp:api:type:Customer">Customer</a> associated with the Payment.</p>
     *

     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer();

    /**
     * <p><a href="ctp:api:type:AnonymousSession">Anonymous session</a> associated with the Payment.</p>
     *

     * @return null|string
     */
    public function getAnonymousId();

    /**
     * <p>Additional identifier for external systems like Customer Relationship Management (CRM) or Enterprise Resource Planning (ERP).</p>
     *

     * @return null|string
     */
    public function getExternalId();

    /**
     * <p>Identifier used by the payment service that processes the Payment (for example, a PSP).
     * The combination of <code>interfaceId</code> and the <code>paymentInterface</code> field on <a href="ctp:api:type:PaymentMethodInfo">PaymentMethodInfo</a> must be unique.
     * Once set, it cannot be changed.</p>
     *

     * @return null|string
     */
    public function getInterfaceId();

    /**
     * <p>Money value the Payment intends to receive from the customer.
     * The value typically matches the <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a> gross total.</p>
     *

     * @return null|Money
     */
    public function getAmountPlanned();

    /**
     * <p>Deprecated because the value can be calculated from the total amounts saved in the <a href="ctp:api:type:Transaction">Transactions</a>.</p>
     *

     * @return null|Money
     */
    public function getAmountAuthorized();

    /**
     * <p>Deprecated because this field is of little practical value, as it is either not reliably known, or the authorization time is fixed for a PSP.</p>
     *

     * @return null|string
     */
    public function getAuthorizedUntil();

    /**
     * <p>Deprecated because the value can be calculated from the total amounts saved in the <a href="ctp:api:type:Transaction">Transactions</a>.</p>
     *

     * @return null|Money
     */
    public function getAmountPaid();

    /**
     * <p>Deprecated because the value can be calculated from the total amounts saved in the <a href="ctp:api:type:Transaction">Transactions</a>.</p>
     *

     * @return null|Money
     */
    public function getAmountRefunded();

    /**
     * <p>Information regarding the payment interface (for example, a PSP), and the specific payment method used.</p>
     *

     * @return null|PaymentMethodInfo
     */
    public function getPaymentMethodInfo();

    /**
     * <p>Current status of the Payment.</p>
     *

     * @return null|PaymentStatusDraft
     */
    public function getPaymentStatus();

    /**
     * <p>Financial transactions of the Payment. Each Transaction has a <a href="ctp:api:type:TransactionType">TransactionType</a> and a <a href="ctp:api:type:TransactionState">TransactionState</a>.</p>
     *

     * @return null|TransactionDraftCollection
     */
    public function getTransactions();

    /**
     * <p>Represents information exchange with the payment service, for example, a PSP. An interaction may be a request sent, or a response or notification received from the payment service.</p>
     *

     * @return null|CustomFieldsDraftCollection
     */
    public function getInterfaceInteractions();

    /**
     * <p>Custom Fields for the Payment.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>User-defined unique identifier for the Payment.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * @param ?CustomerResourceIdentifier $customer
     */
    public function setCustomer(?CustomerResourceIdentifier $customer): void;

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void;

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void;

    /**
     * @param ?string $interfaceId
     */
    public function setInterfaceId(?string $interfaceId): void;

    /**
     * @param ?Money $amountPlanned
     */
    public function setAmountPlanned(?Money $amountPlanned): void;

    /**
     * @param ?Money $amountAuthorized
     */
    public function setAmountAuthorized(?Money $amountAuthorized): void;

    /**
     * @param ?string $authorizedUntil
     */
    public function setAuthorizedUntil(?string $authorizedUntil): void;

    /**
     * @param ?Money $amountPaid
     */
    public function setAmountPaid(?Money $amountPaid): void;

    /**
     * @param ?Money $amountRefunded
     */
    public function setAmountRefunded(?Money $amountRefunded): void;

    /**
     * @param ?PaymentMethodInfo $paymentMethodInfo
     */
    public function setPaymentMethodInfo(?PaymentMethodInfo $paymentMethodInfo): void;

    /**
     * @param ?PaymentStatusDraft $paymentStatus
     */
    public function setPaymentStatus(?PaymentStatusDraft $paymentStatus): void;

    /**
     * @param ?TransactionDraftCollection $transactions
     */
    public function setTransactions(?TransactionDraftCollection $transactions): void;

    /**
     * @param ?CustomFieldsDraftCollection $interfaceInteractions
     */
    public function setInterfaceInteractions(?CustomFieldsDraftCollection $interfaceInteractions): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
