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
 * @extends CartUpdateActionCollection<CartSetShippingCustomTypeAction>
 * @method CartSetShippingCustomTypeAction current()
 * @method CartSetShippingCustomTypeAction end()
 * @method CartSetShippingCustomTypeAction at($offset)
 */
class CartSetShippingCustomTypeActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetShippingCustomTypeAction $value
     * @psalm-param CartSetShippingCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetShippingCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetShippingCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetShippingCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetShippingCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetShippingCustomTypeAction $data */
                $data = CartSetShippingCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
