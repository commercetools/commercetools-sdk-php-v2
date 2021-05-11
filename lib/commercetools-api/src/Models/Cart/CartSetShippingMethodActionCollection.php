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
 * @extends CartUpdateActionCollection<CartSetShippingMethodAction>
 * @method CartSetShippingMethodAction current()
 * @method CartSetShippingMethodAction at($offset)
 */
class CartSetShippingMethodActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetShippingMethodAction $value
     * @psalm-param CartSetShippingMethodAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetShippingMethodActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetShippingMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetShippingMethodAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetShippingMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetShippingMethodAction $data */
                $data = CartSetShippingMethodActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
