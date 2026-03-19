<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\AssociateCollection;

interface SetAssociatesChange extends Change
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

     * @return null|AssociateCollection
     */
    public function getAddedItems();

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|AssociateCollection
     */
    public function getRemovedItems();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|AssociateCollection
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|AssociateCollection
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?AssociateCollection $addedItems
     */
    public function setAddedItems(?AssociateCollection $addedItems): void;

    /**
     * @param ?AssociateCollection $removedItems
     */
    public function setRemovedItems(?AssociateCollection $removedItems): void;

    /**
     * @param ?AssociateCollection $previousValue
     */
    public function setPreviousValue(?AssociateCollection $previousValue): void;

    /**
     * @param ?AssociateCollection $nextValue
     */
    public function setNextValue(?AssociateCollection $nextValue): void;
}
