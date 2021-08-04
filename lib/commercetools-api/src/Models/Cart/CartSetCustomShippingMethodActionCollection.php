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
 * @extends CartUpdateActionCollection<CartSetCustomShippingMethodAction>
 * @method CartSetCustomShippingMethodAction current()
 * @method CartSetCustomShippingMethodAction at($offset)
 */
class CartSetCustomShippingMethodActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetCustomShippingMethodAction $value
     * @psalm-param CartSetCustomShippingMethodAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetCustomShippingMethodActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetCustomShippingMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetCustomShippingMethodAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetCustomShippingMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetCustomShippingMethodAction $data */
                $data = CartSetCustomShippingMethodActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
