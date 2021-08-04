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
 * @extends OrderUpdateActionCollection<OrderSetShippingAddressAction>
 * @method OrderSetShippingAddressAction current()
 * @method OrderSetShippingAddressAction end()
 * @method OrderSetShippingAddressAction at($offset)
 */
class OrderSetShippingAddressActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetShippingAddressAction $value
     * @psalm-param OrderSetShippingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetShippingAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderSetShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetShippingAddressAction $data */
                $data = OrderSetShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
