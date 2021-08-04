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
 * @extends OrderUpdateActionCollection<OrderChangeOrderStateAction>
 * @method OrderChangeOrderStateAction current()
 * @method OrderChangeOrderStateAction end()
 * @method OrderChangeOrderStateAction at($offset)
 */
class OrderChangeOrderStateActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderChangeOrderStateAction $value
     * @psalm-param OrderChangeOrderStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderChangeOrderStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderChangeOrderStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderChangeOrderStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderChangeOrderStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderChangeOrderStateAction $data */
                $data = OrderChangeOrderStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
