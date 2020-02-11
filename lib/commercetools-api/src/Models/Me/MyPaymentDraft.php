<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Payment\PaymentMethodInfo;
use Commercetools\Api\Models\Type\CustomFieldsDraft;

interface MyPaymentDraft extends JsonObject
{

    public const FIELD_AMOUNT_PLANNED = 'amountPlanned';
    public const FIELD_PAYMENT_METHOD_INFO = 'paymentMethodInfo';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_TRANSACTION = 'transaction';

    /**
     * <p>How much money this payment intends to receive from the customer.
     * The value usually matches the cart or order gross total.</p>
     *
     * @return null|Money
     */
    public function getAmountPlanned();

    /**
     * @return null|PaymentMethodInfo
     */
    public function getPaymentMethodInfo();

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>A list of financial transactions of the <code>Authorization</code> or <code>Charge</code>
     * TransactionTypes.</p>
     *
     * @return null|MyTransactionDraft
     */
    public function getTransaction();

    public function setAmountPlanned(?Money $amountPlanned): void;

    public function setPaymentMethodInfo(?PaymentMethodInfo $paymentMethodInfo): void;

    public function setCustom(?CustomFieldsDraft $custom): void;

    public function setTransaction(?MyTransactionDraft $transaction): void;
}
