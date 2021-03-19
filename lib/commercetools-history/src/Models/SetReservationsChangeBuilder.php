<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
    private $nextValue;

    /**
     * @var ?ReservationCollection
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setReservations</code> on inventories</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|ReservationCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * @return null|ReservationCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
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
     * @param ?ReservationCollection $nextValue
     * @return $this
     */
    public function withNextValue(?ReservationCollection $nextValue)
    {
        $this->nextValue = $nextValue;

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


    public function build(): SetReservationsChange
    {
        return new SetReservationsChangeModel(
            $this->change,
            $this->nextValue,
            $this->previousValue
        );
    }

    public static function of(): SetReservationsChangeBuilder
    {
        return new self();
    }
}
