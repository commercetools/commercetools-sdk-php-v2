<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentTransactionInterfaceIdSetMessagePayload extends MessagePayload
{
    public const FIELD_TRANSACTION_ID = 'transactionId';
    public const FIELD_NEW_INTERFACE_ID = 'newInterfaceId';
    public const FIELD_OLD_INTERFACE_ID = 'oldInterfaceId';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Transaction">Transaction</a>.</p>
     *

     * @return null|string
     */
    public function getTransactionId();

    /**
     * <p>Identifier used by the payment service that processes the Payment (for example, a PSP) after <a href="ctp:api:type:PaymentSetTransactionInterfaceIdAction">Set Transaction InterfaceId</a> update action.</p>
     *

     * @return null|string
     */
    public function getNewInterfaceId();

    /**
     * <p>Identifier used by the payment service that processes the Payment (for example, a PSP) before the <a href="ctp:api:type:PaymentSetTransactionInterfaceIdAction">Set Transaction InterfaceId</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldInterfaceId();

    /**
     * @param ?string $transactionId
     */
    public function setTransactionId(?string $transactionId): void;

    /**
     * @param ?string $newInterfaceId
     */
    public function setNewInterfaceId(?string $newInterfaceId): void;

    /**
     * @param ?string $oldInterfaceId
     */
    public function setOldInterfaceId(?string $oldInterfaceId): void;
}
