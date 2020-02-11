<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface CustomLineItemStateTransitionMessagePayload extends MessagePayload
{
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_TRANSITION_DATE = 'transitionDate';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_FROM_STATE = 'fromState';
    public const FIELD_TO_STATE = 'toState';

    /**
     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * @return null|DateTimeImmutable
     */
    public function getTransitionDate();

    /**
     * @return null|int
     */
    public function getQuantity();

    /**
     * @return null|StateReference
     */
    public function getFromState();

    /**
     * @return null|StateReference
     */
    public function getToState();

    public function setCustomLineItemId(?string $customLineItemId): void;

    public function setTransitionDate(?DateTimeImmutable $transitionDate): void;

    public function setQuantity(?int $quantity): void;

    public function setFromState(?StateReference $fromState): void;

    public function setToState(?StateReference $toState): void;
}
