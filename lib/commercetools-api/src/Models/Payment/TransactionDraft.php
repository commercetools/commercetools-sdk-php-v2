<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface TransactionDraft extends JsonObject
{
    const FIELD_TIMESTAMP = 'timestamp';
    const FIELD_TYPE = 'type';
    const FIELD_AMOUNT = 'amount';
    const FIELD_INTERACTION_ID = 'interactionId';
    const FIELD_STATE = 'state';

    /**
     * @return null|DateTimeImmutable
     */
    public function getTimestamp();

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|Money
     */
    public function getAmount();

    /**
     * @return null|string
     */
    public function getInteractionId();

    /**
     * @return null|string
     */
    public function getState();

    public function setTimestamp(?DateTimeImmutable $timestamp): void;

    public function setType(?string $type): void;

    public function setAmount(?Money $amount): void;

    public function setInteractionId(?string $interactionId): void;

    public function setState(?string $state): void;
}
