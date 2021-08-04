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
 * @extends OrderUpdateActionCollection<OrderRemoveItemShippingAddressAction>
 * @method OrderRemoveItemShippingAddressAction current()
 * @method OrderRemoveItemShippingAddressAction end()
 * @method OrderRemoveItemShippingAddressAction at($offset)
 */
class OrderRemoveItemShippingAddressActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderRemoveItemShippingAddressAction $value
     * @psalm-param OrderRemoveItemShippingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderRemoveItemShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderRemoveItemShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderRemoveItemShippingAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderRemoveItemShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderRemoveItemShippingAddressAction $data */
                $data = OrderRemoveItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
