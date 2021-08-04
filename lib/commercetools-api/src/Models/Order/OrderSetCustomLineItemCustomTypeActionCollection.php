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
 * @extends OrderUpdateActionCollection<OrderSetCustomLineItemCustomTypeAction>
 * @method OrderSetCustomLineItemCustomTypeAction current()
 * @method OrderSetCustomLineItemCustomTypeAction at($offset)
 */
class OrderSetCustomLineItemCustomTypeActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetCustomLineItemCustomTypeAction $value
     * @psalm-param OrderSetCustomLineItemCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetCustomLineItemCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetCustomLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetCustomLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetCustomLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetCustomLineItemCustomTypeAction $data */
                $data = OrderSetCustomLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
