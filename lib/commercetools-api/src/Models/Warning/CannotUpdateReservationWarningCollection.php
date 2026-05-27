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
 * @extends WarningObjectCollection<CannotUpdateReservationWarning>
 * @method CannotUpdateReservationWarning current()
 * @method CannotUpdateReservationWarning end()
 * @method CannotUpdateReservationWarning at($offset)
 */
class CannotUpdateReservationWarningCollection extends WarningObjectCollection
{
    /**
     * @psalm-assert CannotUpdateReservationWarning $value
     * @psalm-param CannotUpdateReservationWarning|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CannotUpdateReservationWarningCollection
     */
    public function add($value)
    {
        if (!$value instanceof CannotUpdateReservationWarning) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CannotUpdateReservationWarning
     */
    protected function mapper()
    {
        return function (?int $index): ?CannotUpdateReservationWarning {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CannotUpdateReservationWarning $data */
                $data = CannotUpdateReservationWarningModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
