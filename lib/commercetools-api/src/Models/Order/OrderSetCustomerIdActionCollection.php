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
 * @extends OrderUpdateActionCollection<OrderSetCustomerIdAction>
 * @method OrderSetCustomerIdAction current()
 * @method OrderSetCustomerIdAction at($offset)
 */
class OrderSetCustomerIdActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetCustomerIdAction $value
     * @psalm-param OrderSetCustomerIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetCustomerIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetCustomerIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetCustomerIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetCustomerIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetCustomerIdAction $data */
                $data = OrderSetCustomerIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
