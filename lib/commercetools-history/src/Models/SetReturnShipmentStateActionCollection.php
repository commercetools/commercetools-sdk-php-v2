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
 * @extends MapperSequence<SetReturnShipmentStateAction>
 * @method SetReturnShipmentStateAction current()
 * @method SetReturnShipmentStateAction at($offset)
 */
class SetReturnShipmentStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetReturnShipmentStateAction $value
     * @psalm-param SetReturnShipmentStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetReturnShipmentStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetReturnShipmentStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetReturnShipmentStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetReturnShipmentStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetReturnShipmentStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
