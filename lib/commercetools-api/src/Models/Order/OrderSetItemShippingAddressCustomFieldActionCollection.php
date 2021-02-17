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
 * @extends MapperSequence<OrderSetItemShippingAddressCustomFieldAction>
 * @method OrderSetItemShippingAddressCustomFieldAction current()
 * @method OrderSetItemShippingAddressCustomFieldAction at($offset)
 */
class OrderSetItemShippingAddressCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetItemShippingAddressCustomFieldAction $value
     * @psalm-param OrderSetItemShippingAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetItemShippingAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetItemShippingAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetItemShippingAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetItemShippingAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetItemShippingAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
