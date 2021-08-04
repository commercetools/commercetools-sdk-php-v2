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
 * @extends OrderUpdateActionCollection<OrderChangePaymentStateAction>
 * @method OrderChangePaymentStateAction current()
 * @method OrderChangePaymentStateAction at($offset)
 */
class OrderChangePaymentStateActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderChangePaymentStateAction $value
     * @psalm-param OrderChangePaymentStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderChangePaymentStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderChangePaymentStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderChangePaymentStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderChangePaymentStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderChangePaymentStateAction $data */
                $data = OrderChangePaymentStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
