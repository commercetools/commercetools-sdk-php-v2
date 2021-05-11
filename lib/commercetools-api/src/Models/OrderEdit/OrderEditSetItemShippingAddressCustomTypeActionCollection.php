<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\OrderEdit\OrderEditUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderEditUpdateActionCollection<OrderEditSetItemShippingAddressCustomTypeAction>
 * @method OrderEditSetItemShippingAddressCustomTypeAction current()
 * @method OrderEditSetItemShippingAddressCustomTypeAction at($offset)
 */
class OrderEditSetItemShippingAddressCustomTypeActionCollection extends OrderEditUpdateActionCollection
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
                /** @var OrderEditSetItemShippingAddressCustomTypeAction $data */
                $data = OrderEditSetItemShippingAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
