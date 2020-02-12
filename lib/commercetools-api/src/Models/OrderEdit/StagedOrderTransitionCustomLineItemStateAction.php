<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface StagedOrderTransitionCustomLineItemStateAction extends StagedOrderUpdateAction
{
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_FROM_STATE = 'fromState';
    public const FIELD_TO_STATE = 'toState';
    public const FIELD_ACTUAL_TRANSITION_DATE = 'actualTransitionDate';

    /**
     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * @return null|int
     */
    public function getQuantity();

    /**
     * @return null|StateResourceIdentifier
     */
    public function getFromState();

    /**
     * @return null|StateResourceIdentifier
     */
    public function getToState();

    /**
     * @return null|DateTimeImmutable
     */
    public function getActualTransitionDate();

    public function setCustomLineItemId(?string $customLineItemId): void;

    public function setQuantity(?int $quantity): void;

    public function setFromState(?StateResourceIdentifier $fromState): void;

    public function setToState(?StateResourceIdentifier $toState): void;

    public function setActualTransitionDate(?DateTimeImmutable $actualTransitionDate): void;
}
