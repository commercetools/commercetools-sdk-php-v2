<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface MyTransactionDraft extends JsonObject
{
    const FIELD_TIMESTAMP = 'timestamp';
    const FIELD_TYPE = 'type';
    const FIELD_AMOUNT = 'amount';
    const FIELD_INTERACTION_ID = 'interactionId';

    /**
     * <p>The time at which the transaction took place.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getTimestamp();

    /**
     * <p>The type of this transaction.
     * Only the <code>Authorization</code> or <code>Charge</code>
     * TransactionTypes are allowed here.</p>.
     *
     * @return null|string
     */
    public function getType();

    /**
     * @return null|Money
     */
    public function getAmount();

    /**
     * <p>The identifier that is used by the interface that managed the transaction (usually the PSP).
     * If a matching interaction was logged in the interfaceInteractions array,
     * the corresponding interaction should be findable with this ID.
     * The <code>state</code> is set to the <code>Initial</code> TransactionState.</p>.
     *
     * @return null|string
     */
    public function getInteractionId();

    public function setTimestamp(?DateTimeImmutable $timestamp): void;

    public function setType(?string $type): void;

    public function setAmount(?Money $amount): void;

    public function setInteractionId(?string $interactionId): void;
}
