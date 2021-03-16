<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetReservationsChange>
 * @method SetReservationsChange current()
 * @method SetReservationsChange at($offset)
 */
class SetReservationsChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetReservationsChange $value
     * @psalm-param SetReservationsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetReservationsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetReservationsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetReservationsChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetReservationsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetReservationsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
