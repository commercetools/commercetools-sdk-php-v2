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
 * @extends MapperSequence<OrderSetItemShippingAddressCustomTypeAction>
 * @method OrderSetItemShippingAddressCustomTypeAction current()
 * @method OrderSetItemShippingAddressCustomTypeAction at($offset)
 */
class OrderSetItemShippingAddressCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetItemShippingAddressCustomTypeAction $value
     * @psalm-param OrderSetItemShippingAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetItemShippingAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetItemShippingAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetItemShippingAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetItemShippingAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetItemShippingAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
