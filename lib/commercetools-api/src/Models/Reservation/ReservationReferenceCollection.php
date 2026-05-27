<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Reservation;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<ReservationReference>
 * @method ReservationReference current()
 * @method ReservationReference end()
 * @method ReservationReference at($offset)
 */
class ReservationReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert ReservationReference $value
     * @psalm-param ReservationReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReservationReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReservationReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReservationReference
     */
    protected function mapper()
    {
        return function (?int $index): ?ReservationReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReservationReference $data */
                $data = ReservationReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
