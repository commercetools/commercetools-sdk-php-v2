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
 * @extends MapperSequence<ChangeShipmentStateAction>
 * @method ChangeShipmentStateAction current()
 * @method ChangeShipmentStateAction at($offset)
 */
class ChangeShipmentStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeShipmentStateAction $value
     * @psalm-param ChangeShipmentStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeShipmentStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeShipmentStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeShipmentStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeShipmentStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeShipmentStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
