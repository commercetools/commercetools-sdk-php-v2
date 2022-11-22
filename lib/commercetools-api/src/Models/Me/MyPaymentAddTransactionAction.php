<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Payment\TransactionDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyPaymentAddTransactionAction extends MyPaymentUpdateAction
{
    public const FIELD_TRANSACTION = 'transaction';

    /**
     * <p>Transaction to add to the Payment.</p>
     *

     * @return null|TransactionDraft
     */
    public function getTransaction();

    /**
     * @param ?TransactionDraft $transaction
     */
    public function setTransaction(?TransactionDraft $transaction): void;
}
