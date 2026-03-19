<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SetPermissionsChange extends Change
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

     * @return null|array
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|array
     */
    public function getNextValue();

    /**
     * <p>Elements added to the array.</p>
     *

     * @return null|array
     */
    public function getAddedItems();

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|array
     */
    public function getRemovedItems();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?array $previousValue
     */
    public function setPreviousValue(?array $previousValue): void;

    /**
     * @param ?array $nextValue
     */
    public function setNextValue(?array $nextValue): void;

    /**
     * @param ?array $addedItems
     */
    public function setAddedItems(?array $addedItems): void;

    /**
     * @param ?array $removedItems
     */
    public function setRemovedItems(?array $removedItems): void;
}
