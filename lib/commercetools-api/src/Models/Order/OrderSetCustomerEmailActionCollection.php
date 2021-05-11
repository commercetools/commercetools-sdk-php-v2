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
 * @extends OrderUpdateActionCollection<OrderSetCustomerEmailAction>
 * @method OrderSetCustomerEmailAction current()
 * @method OrderSetCustomerEmailAction at($offset)
 */
class OrderSetCustomerEmailActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetCustomerEmailAction $value
     * @psalm-param OrderSetCustomerEmailAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetCustomerEmailActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetCustomerEmailAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetCustomerEmailAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetCustomerEmailAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetCustomerEmailAction $data */
                $data = OrderSetCustomerEmailActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
