<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface OrderTransitionLineItemStateAction extends OrderUpdateAction
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_FROM_STATE = 'fromState';
    public const FIELD_TO_STATE = 'toState';
    public const FIELD_ACTUAL_TRANSITION_DATE = 'actualTransitionDate';

    /**

     * @return null|string
     */
    public function getLineItemId();

    /**

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *

     * @return null|StateResourceIdentifier
     */
    public function getFromState();

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *

     * @return null|StateResourceIdentifier
     */
    public function getToState();

    /**

     * @return null|DateTimeImmutable
     */
    public function getActualTransitionDate();

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?StateResourceIdentifier $fromState
     */
    public function setFromState(?StateResourceIdentifier $fromState): void;

    /**
     * @param ?StateResourceIdentifier $toState
     */
    public function setToState(?StateResourceIdentifier $toState): void;

    /**
     * @param ?DateTimeImmutable $actualTransitionDate
     */
    public function setActualTransitionDate(?DateTimeImmutable $actualTransitionDate): void;
}
