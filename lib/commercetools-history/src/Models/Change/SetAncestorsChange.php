<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\ReferenceCollection;

interface SetAncestorsChange extends Change
{

    public const FIELD_ADDED_ITEMS = 'addedItems';
    public const FIELD_REMOVED_ITEMS = 'removedItems';
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
     * <p>Elements added to the array.</p>
     *

     * @return null|ReferenceCollection
     */
    public function getAddedItems();

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|ReferenceCollection
     */
    public function getRemovedItems();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|ReferenceCollection
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ReferenceCollection
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ReferenceCollection $addedItems
     */
    public function setAddedItems(?ReferenceCollection $addedItems): void;

    /**
     * @param ?ReferenceCollection $removedItems
     */
    public function setRemovedItems(?ReferenceCollection $removedItems): void;

    /**
     * @param ?ReferenceCollection $previousValue
     */
    public function setPreviousValue(?ReferenceCollection $previousValue): void;

    /**
     * @param ?ReferenceCollection $nextValue
     */
    public function setNextValue(?ReferenceCollection $nextValue): void;
}
