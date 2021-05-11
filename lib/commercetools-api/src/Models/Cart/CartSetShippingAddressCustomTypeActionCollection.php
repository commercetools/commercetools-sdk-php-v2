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
 * @extends CartUpdateActionCollection<CartSetShippingAddressCustomTypeAction>
 * @method CartSetShippingAddressCustomTypeAction current()
 * @method CartSetShippingAddressCustomTypeAction at($offset)
 */
class CartSetShippingAddressCustomTypeActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetShippingAddressCustomTypeAction $value
     * @psalm-param CartSetShippingAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetShippingAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetShippingAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetShippingAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetShippingAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetShippingAddressCustomTypeAction $data */
                $data = CartSetShippingAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
