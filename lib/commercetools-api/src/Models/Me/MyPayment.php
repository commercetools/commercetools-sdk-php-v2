<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Payment\PaymentMethodInfo;
use Commercetools\Api\Models\Payment\TransactionCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyPayment extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_VERSION = 'version';
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_ANONYMOUS_ID = 'anonymousId';
    public const FIELD_AMOUNT_PLANNED = 'amountPlanned';
    public const FIELD_PAYMENT_METHOD_INFO = 'paymentMethodInfo';
    public const FIELD_TRANSACTIONS = 'transactions';
    public const FIELD_CUSTOM = 'custom';

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
     * <p>Reference to a <a href="ctp:api:type:Customer">Customer</a> associated with the Payment. Set automatically with a <a href="/../api/authorization#password-flow">password flow token</a>. Either <code>customer</code> or <code>anonymousId</code> is present.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * <p><a href="ctp:api:type:AnonymousSession">Anonymous session</a> associated with the Payment. Set automatically with a <a href="ctp:api:type:AnonymousSession">token for an anonymous session</a>. Either <code>customer</code> or <code>anonymousId</code> is present.</p>
     *

     * @return null|string
     */
    public function getAnonymousId();

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
     * <p>Financial transactions of the Payment. Each Transaction has a <a href="ctp:api:type:TransactionType">TransactionType</a> and a <a href="ctp:api:type:TransactionState">TransactionState</a>.</p>
     *

     * @return null|TransactionCollection
     */
    public function getTransactions();

    /**
     * <p>Custom Fields defined for the Payment.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void;

    /**
     * @param ?string $anonymousId
     */
    public function setAnonymousId(?string $anonymousId): void;

    /**
     * @param ?CentPrecisionMoney $amountPlanned
     */
    public function setAmountPlanned(?CentPrecisionMoney $amountPlanned): void;

    /**
     * @param ?PaymentMethodInfo $paymentMethodInfo
     */
    public function setPaymentMethodInfo(?PaymentMethodInfo $paymentMethodInfo): void;

    /**
     * @param ?TransactionCollection $transactions
     */
    public function setTransactions(?TransactionCollection $transactions): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;
}
