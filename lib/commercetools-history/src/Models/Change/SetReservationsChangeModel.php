<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\ReservationCollection;

/**
 * @internal
 */
final class SetReservationsChangeModel extends JsonObjectModel implements SetReservationsChange
{

    public const DISCRIMINATOR_VALUE = 'SetReservationsChange';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $change;

    /**
     *
     * @var ?ReservationCollection
     */
    protected $nextValue;

    /**
     *
     * @var ?ReservationCollection
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?ReservationCollection $nextValue = null,
        ?ReservationCollection $previousValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->nextValue = $nextValue;
        $this->previousValue = $previousValue;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Update action for <code>setReservations</code> on inventories</p>
     *
     *
     * @return null|string
     */
    public function getChange()
    {
        if (is_null($this->change)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHANGE);
            if (is_null($data)) {
                return null;
            }
            $this->change =  (string) $data;
        }

        return $this->change;
    }

    /**
     *
     * @return null|ReservationCollection
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue =  ReservationCollection::fromArray($data);
        }

        return $this->nextValue;
    }

    /**
     *
     * @return null|ReservationCollection
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue =  ReservationCollection::fromArray($data);
        }

        return $this->previousValue;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?ReservationCollection $nextValue
     */
    public function setNextValue(?ReservationCollection $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?ReservationCollection $previousValue
     */
    public function setPreviousValue(?ReservationCollection $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
