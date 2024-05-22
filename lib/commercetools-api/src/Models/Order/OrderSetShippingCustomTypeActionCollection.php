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
 * @extends OrderUpdateActionCollection<OrderSetShippingCustomTypeAction>
 * @method OrderSetShippingCustomTypeAction current()
 * @method OrderSetShippingCustomTypeAction end()
 * @method OrderSetShippingCustomTypeAction at($offset)
 */
class OrderSetShippingCustomTypeActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetShippingCustomTypeAction $value
     * @psalm-param OrderSetShippingCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetShippingCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetShippingCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetShippingCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetShippingCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetShippingCustomTypeAction $data */
                $data = OrderSetShippingCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
