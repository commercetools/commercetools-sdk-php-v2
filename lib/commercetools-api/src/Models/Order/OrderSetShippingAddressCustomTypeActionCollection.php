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
 * @extends OrderUpdateActionCollection<OrderSetShippingAddressCustomTypeAction>
 * @method OrderSetShippingAddressCustomTypeAction current()
 * @method OrderSetShippingAddressCustomTypeAction at($offset)
 */
class OrderSetShippingAddressCustomTypeActionCollection extends OrderUpdateActionCollection
{
    /**
     * @psalm-assert OrderSetShippingAddressCustomTypeAction $value
     * @psalm-param OrderSetShippingAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetShippingAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetShippingAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetShippingAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetShippingAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderSetShippingAddressCustomTypeAction $data */
                $data = OrderSetShippingAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
