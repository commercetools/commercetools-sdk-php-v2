<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentAddTransactionAction extends PaymentUpdateAction
{
    public const FIELD_TRANSACTION = 'transaction';

    /**
     * <p>Value to append to the <code>transactions</code> array.</p>
     *

     * @return null|TransactionDraft
     */
    public function getTransaction();

    /**
     * @param ?TransactionDraft $transaction
     */
    public function setTransaction(?TransactionDraft $transaction): void;
}
