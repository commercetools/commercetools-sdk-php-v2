<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\ProductSelectionSettingCollection;

interface SetProductSelectionsChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_ADDED_ITEMS = 'addedItems';
    public const FIELD_REMOVED_ITEMS = 'removedItems';

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

     * @return null|ProductSelectionSettingCollection
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ProductSelectionSettingCollection
     */
    public function getNextValue();

    /**
     * <p>Elements added to the array.</p>
     *

     * @return null|ProductSelectionSettingCollection
     */
    public function getAddedItems();

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|ProductSelectionSettingCollection
     */
    public function getRemovedItems();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ProductSelectionSettingCollection $previousValue
     */
    public function setPreviousValue(?ProductSelectionSettingCollection $previousValue): void;

    /**
     * @param ?ProductSelectionSettingCollection $nextValue
     */
    public function setNextValue(?ProductSelectionSettingCollection $nextValue): void;

    /**
     * @param ?ProductSelectionSettingCollection $addedItems
     */
    public function setAddedItems(?ProductSelectionSettingCollection $addedItems): void;

    /**
     * @param ?ProductSelectionSettingCollection $removedItems
     */
    public function setRemovedItems(?ProductSelectionSettingCollection $removedItems): void;
}
