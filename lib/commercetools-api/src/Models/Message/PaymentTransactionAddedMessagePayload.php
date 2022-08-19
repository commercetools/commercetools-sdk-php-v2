<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Payment\Transaction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentTransactionAddedMessagePayload extends MessagePayload
{
    public const FIELD_TRANSACTION = 'transaction';

    /**
     * <p><a href="ctp:api:type:Transaction">Transaction</a> that was added to the <a href="ctp:api:type:Payment">Payment</a>.</p>
     *

     * @return null|Transaction
     */
    public function getTransaction();

    /**
     * @param ?Transaction $transaction
     */
    public function setTransaction(?Transaction $transaction): void;
}
