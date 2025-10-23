<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\ReservationCollection;

/**
 * @implements Builder<SetReservationsChange>
 */
final class SetReservationsChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?ReservationCollection
     */
    private $previousValue;

    /**

     * @var ?ReservationCollection
     */
    private $nextValue;

    /**

     * @var ?ReservationCollection
     */
    private $addedItems;

    /**

     * @var ?ReservationCollection
     */
    private $removedItems;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|ReservationCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ReservationCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * <p>Elements added to the array.</p>
     *

     * @return null|ReservationCollection
     */
    public function getAddedItems()
    {
        return $this->addedItems;
    }

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|ReservationCollection
     */
    public function getRemovedItems()
    {
        return $this->removedItems;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?ReservationCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?ReservationCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?ReservationCollection $nextValue
     * @return $this
     */
    public function withNextValue(?ReservationCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?ReservationCollection $addedItems
     * @return $this
     */
    public function withAddedItems(?ReservationCollection $addedItems)
    {
        $this->addedItems = $addedItems;

        return $this;
    }

    /**
     * @param ?ReservationCollection $removedItems
     * @return $this
     */
    public function withRemovedItems(?ReservationCollection $removedItems)
    {
        $this->removedItems = $removedItems;

        return $this;
    }


    public function build(): SetReservationsChange
    {
        return new SetReservationsChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->addedItems,
            $this->removedItems
        );
    }

    public static function of(): SetReservationsChangeBuilder
    {
        return new self();
    }
}
