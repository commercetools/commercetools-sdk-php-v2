<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\ChangeValue\ShoppingListLineItemValue;

interface ChangeShoppingListLineItemQuantityChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_LINE_ITEM = 'lineItem';

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

     * @return null|int
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|int
     */
    public function getNextValue();

    /**
     * <p>Holds information about the updated Shopping List Line Item.</p>
     *

     * @return null|ShoppingListLineItemValue
     */
    public function getLineItem();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?int $previousValue
     */
    public function setPreviousValue(?int $previousValue): void;

    /**
     * @param ?int $nextValue
     */
    public function setNextValue(?int $nextValue): void;

    /**
     * @param ?ShoppingListLineItemValue $lineItem
     */
    public function setLineItem(?ShoppingListLineItemValue $lineItem): void;
}
