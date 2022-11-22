<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentChangeTransactionInteractionIdAction extends PaymentUpdateAction
{
    public const FIELD_TRANSACTION_ID = 'transactionId';
    public const FIELD_INTERACTION_ID = 'interactionId';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Transaction">Transaction</a>.</p>
     *

     * @return null|string
     */
    public function getTransactionId();

    /**
     * <p>New value to set.</p>
     *

     * @return null|string
     */
    public function getInteractionId();

    /**
     * @param ?string $transactionId
     */
    public function setTransactionId(?string $transactionId): void;

    /**
     * @param ?string $interactionId
     */
    public function setInteractionId(?string $interactionId): void;
}
