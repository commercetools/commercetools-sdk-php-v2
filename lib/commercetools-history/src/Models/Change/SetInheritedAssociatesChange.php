<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\InheritedAssociateCollection;

interface SetInheritedAssociatesChange extends Change
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

     * @return null|InheritedAssociateCollection
     */
    public function getAddedItems();

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|InheritedAssociateCollection
     */
    public function getRemovedItems();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|InheritedAssociateCollection
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|InheritedAssociateCollection
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?InheritedAssociateCollection $addedItems
     */
    public function setAddedItems(?InheritedAssociateCollection $addedItems): void;

    /**
     * @param ?InheritedAssociateCollection $removedItems
     */
    public function setRemovedItems(?InheritedAssociateCollection $removedItems): void;

    /**
     * @param ?InheritedAssociateCollection $previousValue
     */
    public function setPreviousValue(?InheritedAssociateCollection $previousValue): void;

    /**
     * @param ?InheritedAssociateCollection $nextValue
     */
    public function setNextValue(?InheritedAssociateCollection $nextValue): void;
}
