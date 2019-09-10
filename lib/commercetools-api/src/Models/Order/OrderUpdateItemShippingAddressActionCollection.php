<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderUpdateItemShippingAddressAction>
 *
 * @method OrderUpdateItemShippingAddressAction current()
 * @method OrderUpdateItemShippingAddressAction at($offset)
 */
class OrderUpdateItemShippingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderUpdateItemShippingAddressAction $value
     * @psalm-param OrderUpdateItemShippingAddressAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return OrderUpdateItemShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderUpdateItemShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderUpdateItemShippingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderUpdateItemShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderUpdateItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
