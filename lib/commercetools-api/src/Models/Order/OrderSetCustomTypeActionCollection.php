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
 * @extends OrderUpdateActionCollection<OrderSetCustomTypeAction>
 * @method OrderSetCustomTypeAction current()
 * @method OrderSetCustomTypeAction at($offset)
 */
class OrderSetCustomTypeActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetCustomTypeAction $value
     * @psalm-param OrderSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetCustomTypeAction $data */
                $data = OrderSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
