<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\ItemStateCollection;

interface TransitionCustomLineItemStateChange extends Change
{

    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_STATE_ID = 'stateId';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>transitionCustomLineItemState</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @return null|string
     */
    public function getStateId();

    /**
     * @return null|ItemStateCollection
     */
    public function getNextValue();

    /**
     * @return null|ItemStateCollection
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?string $stateId
     */
    public function setStateId(?string $stateId): void;

    /**
     * @param ?ItemStateCollection $nextValue
     */
    public function setNextValue(?ItemStateCollection $nextValue): void;

    /**
     * @param ?ItemStateCollection $previousValue
     */
    public function setPreviousValue(?ItemStateCollection $previousValue): void;
}
