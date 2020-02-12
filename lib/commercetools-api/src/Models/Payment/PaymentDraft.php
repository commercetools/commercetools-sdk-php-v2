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
     * <p>A reference to the customer this payment belongs to.</p>
     *
     * @return null|CustomerResourceIdentifier
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
     * <p>A list of financial transactions of different TransactionTypes with different TransactionStates.</p>
     *
     * @return null|TransactionDraftCollection
     */
    public function getTransactions();

    /**
     * <p>Interface interactions can be requests send to the PSP, responses received from the PSP or notifications received from the PSP.
     * Some interactions may result in a transaction.
     * If so, the <code>interactionId</code> in the Transaction should be set to match the ID of the PSP for the interaction.
     * Interactions are managed by the PSP integration and are usually neither written nor read by the user facing frontends or other services.</p>
     *
     * @return null|CustomFieldsDraftCollection
     */
    public function getInterfaceInteractions();

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>User-specific unique identifier for the payment (max.
     * 256 characters).</p>
     *
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
