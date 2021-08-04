<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<ChangeShipmentStateChange>
 * @method ChangeShipmentStateChange current()
 * @method ChangeShipmentStateChange end()
 * @method ChangeShipmentStateChange at($offset)
 */
class ChangeShipmentStateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeShipmentStateChange $value
     * @psalm-param ChangeShipmentStateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeShipmentStateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeShipmentStateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeShipmentStateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeShipmentStateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeShipmentStateChange $data */
                $data = ChangeShipmentStateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
