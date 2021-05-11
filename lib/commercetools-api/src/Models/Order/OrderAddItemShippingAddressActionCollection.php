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
 * @extends OrderUpdateActionCollection<OrderAddItemShippingAddressAction>
 * @method OrderAddItemShippingAddressAction current()
 * @method OrderAddItemShippingAddressAction at($offset)
 */
class OrderAddItemShippingAddressActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderAddItemShippingAddressAction $value
     * @psalm-param OrderAddItemShippingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderAddItemShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderAddItemShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderAddItemShippingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderAddItemShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderAddItemShippingAddressAction $data */
                $data = OrderAddItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
