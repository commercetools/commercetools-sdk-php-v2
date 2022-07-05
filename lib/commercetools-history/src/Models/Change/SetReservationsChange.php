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

    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * <p>Update action for <code>setReservations</code> on inventories</p>
     *

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|ReservationCollection
     */
    public function getNextValue();

    /**

     * @return null|ReservationCollection
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ReservationCollection $nextValue
     */
    public function setNextValue(?ReservationCollection $nextValue): void;

    /**
     * @param ?ReservationCollection $previousValue
     */
    public function setPreviousValue(?ReservationCollection $previousValue): void;
}
