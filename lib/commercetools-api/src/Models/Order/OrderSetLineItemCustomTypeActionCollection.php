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
 * @extends OrderUpdateActionCollection<OrderSetLineItemCustomTypeAction>
 * @method OrderSetLineItemCustomTypeAction current()
 * @method OrderSetLineItemCustomTypeAction at($offset)
 */
class OrderSetLineItemCustomTypeActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetLineItemCustomTypeAction $value
     * @psalm-param OrderSetLineItemCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetLineItemCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetLineItemCustomTypeAction $data */
                $data = OrderSetLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
