<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Payment\PaymentMethodInfo;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyPaymentDraft extends JsonObject
{
    public const FIELD_AMOUNT_PLANNED = 'amountPlanned';
    public const FIELD_PAYMENT_METHOD_INFO = 'paymentMethodInfo';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_TRANSACTION = 'transaction';

    /**
     * <p>Money value the Payment intends to receive from the customer.
     * The value usually matches the <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Order">Order</a> gross total.</p>
     *

     * @return null|Money
     */
    public function getAmountPlanned();

    /**
     * <p>Information regarding the payment interface (for example, a PSP), and the specific payment method used.</p>
     *

     * @return null|PaymentMethodInfo
     */
    public function getPaymentMethodInfo();

    /**
     * <p>Custom Fields for the Payment.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>Financial transactions of the <a href="ctp:api:type:TransactionType">TransactionTypes</a> <code>Authorization</code> or <code>Charge</code>.</p>
     *

     * @return null|MyTransactionDraft
     */
    public function getTransaction();

    /**
     * @param ?Money $amountPlanned
     */
    public function setAmountPlanned(?Money $amountPlanned): void;

    /**
     * @param ?PaymentMethodInfo $paymentMethodInfo
     */
    public function setPaymentMethodInfo(?PaymentMethodInfo $paymentMethodInfo): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?MyTransactionDraft $transaction
     */
    public function setTransaction(?MyTransactionDraft $transaction): void;
}
