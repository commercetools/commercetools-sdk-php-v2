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
 * @extends MapperSequence<OrderAddItemShippingAddressAction>
 * @method OrderAddItemShippingAddressAction current()
 * @method OrderAddItemShippingAddressAction at($offset)
 */
class OrderAddItemShippingAddressActionCollection extends MapperSequence
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
                $data = OrderAddItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
