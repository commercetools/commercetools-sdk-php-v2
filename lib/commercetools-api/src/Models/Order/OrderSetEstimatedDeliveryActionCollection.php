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
 * @extends OrderUpdateActionCollection<OrderSetEstimatedDeliveryAction>
 * @method OrderSetEstimatedDeliveryAction current()
 * @method OrderSetEstimatedDeliveryAction end()
 * @method OrderSetEstimatedDeliveryAction at($offset)
 */
class OrderSetEstimatedDeliveryActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetEstimatedDeliveryAction $value
     * @psalm-param OrderSetEstimatedDeliveryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetEstimatedDeliveryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetEstimatedDeliveryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetEstimatedDeliveryAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetEstimatedDeliveryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetEstimatedDeliveryAction $data */
                $data = OrderSetEstimatedDeliveryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
