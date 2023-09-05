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
    public const FIELD_CUSTOM_LINE_ITEM_KEY = 'customLineItemKey';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_FROM_STATE = 'fromState';
    public const FIELD_TO_STATE = 'toState';
    public const FIELD_ACTUAL_TRANSITION_DATE = 'actualTransitionDate';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> to update. Either <code>customLineItemId</code> or <code>customLineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> to update. Either <code>customLineItemId</code> or <code>customLineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemKey();

    /**
     * <p>Number of Custom Line Items that should transition <a href="ctp:api:type:State">State</a>.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p><a href="ctp:api:type:State">State</a> the Custom Line Item should transition from.</p>
     *

     * @return null|StateResourceIdentifier
     */
    public function getFromState();

    /**
     * <p><a href="ctp:api:type:State">State</a> the Custom Line Item should transition to.</p>
     *

     * @return null|StateResourceIdentifier
     */
    public function getToState();

    /**
     * <p>Date and time (UTC) to perform the <a href="ctp:api:type:State">State</a> transition.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getActualTransitionDate();

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void;

    /**
     * @param ?string $customLineItemKey
     */
    public function setCustomLineItemKey(?string $customLineItemKey): void;

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
