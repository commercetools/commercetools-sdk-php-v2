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
 * @extends CartUpdateActionCollection<CartSetShippingAddressAction>
 * @method CartSetShippingAddressAction current()
 * @method CartSetShippingAddressAction at($offset)
 */
class CartSetShippingAddressActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetShippingAddressAction $value
     * @psalm-param CartSetShippingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetShippingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetShippingAddressAction $data */
                $data = CartSetShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
