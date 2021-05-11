<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Order\OrderUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderUpdateActionCollection<OrderSetReturnShipmentStateAction>
 * @method OrderSetReturnShipmentStateAction current()
 * @method OrderSetReturnShipmentStateAction at($offset)
 */
class OrderSetReturnShipmentStateActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetReturnShipmentStateAction $value
     * @psalm-param OrderSetReturnShipmentStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetReturnShipmentStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetReturnShipmentStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetReturnShipmentStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetReturnShipmentStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetReturnShipmentStateAction $data */
                $data = OrderSetReturnShipmentStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
