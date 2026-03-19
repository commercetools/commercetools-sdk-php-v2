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

interface ChangeLineItemPublishedChange extends Change
{

    public const FIELD_LINE_ITEM = 'lineItem';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Holds information about the updated Shopping List Line Item.</p>
     *

     * @return null|ShoppingListLineItemValue
     */
    public function getLineItem();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|bool
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|bool
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ShoppingListLineItemValue $lineItem
     */
    public function setLineItem(?ShoppingListLineItemValue $lineItem): void;

    /**
     * @param ?bool $previousValue
     */
    public function setPreviousValue(?bool $previousValue): void;

    /**
     * @param ?bool $nextValue
     */
    public function setNextValue(?bool $nextValue): void;
}
