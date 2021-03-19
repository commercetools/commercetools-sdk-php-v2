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
 * @extends MapperSequence<SetReturnShipmentStateChange>
 * @method SetReturnShipmentStateChange current()
 * @method SetReturnShipmentStateChange at($offset)
 */
class SetReturnShipmentStateChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetReturnShipmentStateChange $value
     * @psalm-param SetReturnShipmentStateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetReturnShipmentStateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetReturnShipmentStateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetReturnShipmentStateChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetReturnShipmentStateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetReturnShipmentStateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
