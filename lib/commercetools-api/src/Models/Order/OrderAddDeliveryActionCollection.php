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
 * @extends OrderUpdateActionCollection<OrderAddDeliveryAction>
 * @method OrderAddDeliveryAction current()
 * @method OrderAddDeliveryAction end()
 * @method OrderAddDeliveryAction at($offset)
 */
class OrderAddDeliveryActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderAddDeliveryAction $value
     * @psalm-param OrderAddDeliveryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderAddDeliveryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderAddDeliveryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderAddDeliveryAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderAddDeliveryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderAddDeliveryAction $data */
                $data = OrderAddDeliveryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
