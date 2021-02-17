<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartSetItemShippingAddressCustomTypeAction>
 * @method CartSetItemShippingAddressCustomTypeAction current()
 * @method CartSetItemShippingAddressCustomTypeAction at($offset)
 */
class CartSetItemShippingAddressCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetItemShippingAddressCustomTypeAction $value
     * @psalm-param CartSetItemShippingAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetItemShippingAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetItemShippingAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetItemShippingAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetItemShippingAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetItemShippingAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
