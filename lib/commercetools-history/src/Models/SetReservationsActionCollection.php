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
 * @extends MapperSequence<SetReservationsAction>
 * @method SetReservationsAction current()
 * @method SetReservationsAction at($offset)
 */
class SetReservationsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetReservationsAction $value
     * @psalm-param SetReservationsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetReservationsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetReservationsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetReservationsAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetReservationsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetReservationsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
