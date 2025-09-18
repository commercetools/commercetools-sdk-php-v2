<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentSetTransactionInterfaceIdAction extends PaymentUpdateAction
{
    public const FIELD_TRANSACTION_ID = 'transactionId';
    public const FIELD_INTERFACE_ID = 'interfaceId';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Transaction">Transaction</a>.</p>
     *

     * @return null|string
     */
    public function getTransactionId();

    /**
     * <p>Identifier used by the payment service that processes the Payment (for example, a PSP) in the current transaction. It must be unique across all transactions.
     * If <code>interfaceId</code> is absent, this field will be removed from the specified Transaction, if it exists.</p>
     *

     * @return null|string
     */
    public function getInterfaceId();

    /**
     * @param ?string $transactionId
     */
    public function setTransactionId(?string $transactionId): void;

    /**
     * @param ?string $interfaceId
     */
    public function setInterfaceId(?string $interfaceId): void;
}
