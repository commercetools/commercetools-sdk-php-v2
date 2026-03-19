<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\ShoppingListLineItem;

interface RemoveShoppingListLineItemChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

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

     * @return null|ShoppingListLineItem
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ShoppingListLineItem
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ShoppingListLineItem $previousValue
     */
    public function setPreviousValue(?ShoppingListLineItem $previousValue): void;

    /**
     * @param ?ShoppingListLineItem $nextValue
     */
    public function setNextValue(?ShoppingListLineItem $nextValue): void;
}
