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

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_STATE_ID = 'stateId';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getChange();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|ItemStateCollection
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ItemStateCollection
     */
    public function getNextValue();

    /**
     * <p><code>id</code> of the updated <a href="ctp:api:type:CustomLineItem">CustomLineItem</a>.</p>
     *

     * @return null|string
     */
    public function getLineItemId();

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:State">State</a> involved in the transition.</p>
     *

     * @return null|string
     */
    public function getStateId();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ItemStateCollection $previousValue
     */
    public function setPreviousValue(?ItemStateCollection $previousValue): void;

    /**
     * @param ?ItemStateCollection $nextValue
     */
    public function setNextValue(?ItemStateCollection $nextValue): void;

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?string $stateId
     */
    public function setStateId(?string $stateId): void;
}
