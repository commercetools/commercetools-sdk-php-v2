<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Warning;

use Commercetools\Api\Models\Warning\WarningObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends WarningObjectCollection<CannotCreateReservationWarning>
 * @method CannotCreateReservationWarning current()
 * @method CannotCreateReservationWarning end()
 * @method CannotCreateReservationWarning at($offset)
 */
class CannotCreateReservationWarningCollection extends WarningObjectCollection
{
    /**
     * @psalm-assert CannotCreateReservationWarning $value
     * @psalm-param CannotCreateReservationWarning|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CannotCreateReservationWarningCollection
     */
    public function add($value)
    {
        if (!$value instanceof CannotCreateReservationWarning) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CannotCreateReservationWarning
     */
    protected function mapper()
    {
        return function (?int $index): ?CannotCreateReservationWarning {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CannotCreateReservationWarning $data */
                $data = CannotCreateReservationWarningModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
