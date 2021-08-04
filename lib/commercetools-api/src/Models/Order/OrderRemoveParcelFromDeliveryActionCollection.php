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
 * @extends OrderUpdateActionCollection<OrderRemoveParcelFromDeliveryAction>
 * @method OrderRemoveParcelFromDeliveryAction current()
 * @method OrderRemoveParcelFromDeliveryAction at($offset)
 */
class OrderRemoveParcelFromDeliveryActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderRemoveParcelFromDeliveryAction $value
     * @psalm-param OrderRemoveParcelFromDeliveryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderRemoveParcelFromDeliveryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderRemoveParcelFromDeliveryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderRemoveParcelFromDeliveryAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderRemoveParcelFromDeliveryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderRemoveParcelFromDeliveryAction $data */
                $data = OrderRemoveParcelFromDeliveryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
