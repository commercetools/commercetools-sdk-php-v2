<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderEditSetItemShippingAddressCustomTypeAction>
 * @method OrderEditSetItemShippingAddressCustomTypeAction current()
 * @method OrderEditSetItemShippingAddressCustomTypeAction at($offset)
 */
class OrderEditSetItemShippingAddressCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderEditSetItemShippingAddressCustomTypeAction $value
     * @psalm-param OrderEditSetItemShippingAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditSetItemShippingAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditSetItemShippingAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditSetItemShippingAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditSetItemShippingAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderEditSetItemShippingAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
