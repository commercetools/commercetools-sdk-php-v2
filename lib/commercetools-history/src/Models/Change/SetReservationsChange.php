<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\ReservationCollection;

interface SetReservationsChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_ADDED_ITEMS = 'addedItems';
    public const FIELD_REMOVED_ITEMS = 'removedItems';

    /**

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|ReservationCollection
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ReservationCollection
     */
    public function getNextValue();

    /**
     * <p>Elements added to the array.</p>
     *

     * @return null|ReservationCollection
     */
    public function getAddedItems();

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|ReservationCollection
     */
    public function getRemovedItems();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ReservationCollection $previousValue
     */
    public function setPreviousValue(?ReservationCollection $previousValue): void;

    /**
     * @param ?ReservationCollection $nextValue
     */
    public function setNextValue(?ReservationCollection $nextValue): void;

    /**
     * @param ?ReservationCollection $addedItems
     */
    public function setAddedItems(?ReservationCollection $addedItems): void;

    /**
     * @param ?ReservationCollection $removedItems
     */
    public function setRemovedItems(?ReservationCollection $removedItems): void;
}
