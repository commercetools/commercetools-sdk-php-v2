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
 * @extends WarningObjectCollection<CannotChangeReservationExpiryWarning>
 * @method CannotChangeReservationExpiryWarning current()
 * @method CannotChangeReservationExpiryWarning end()
 * @method CannotChangeReservationExpiryWarning at($offset)
 */
class CannotChangeReservationExpiryWarningCollection extends WarningObjectCollection
{
    /**
     * @psalm-assert CannotChangeReservationExpiryWarning $value
     * @psalm-param CannotChangeReservationExpiryWarning|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CannotChangeReservationExpiryWarningCollection
     */
    public function add($value)
    {
        if (!$value instanceof CannotChangeReservationExpiryWarning) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CannotChangeReservationExpiryWarning
     */
    protected function mapper()
    {
        return function (?int $index): ?CannotChangeReservationExpiryWarning {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CannotChangeReservationExpiryWarning $data */
                $data = CannotChangeReservationExpiryWarningModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
