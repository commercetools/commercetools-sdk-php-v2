<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Cart\CartUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CartUpdateActionCollection<CartSetItemShippingAddressCustomTypeAction>
 * @method CartSetItemShippingAddressCustomTypeAction current()
 * @method CartSetItemShippingAddressCustomTypeAction end()
 * @method CartSetItemShippingAddressCustomTypeAction at($offset)
 */
class CartSetItemShippingAddressCustomTypeActionCollection extends CartUpdateActionCollection
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
        return function (?int $index): ?CartSetItemShippingAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetItemShippingAddressCustomTypeAction $data */
                $data = CartSetItemShippingAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
