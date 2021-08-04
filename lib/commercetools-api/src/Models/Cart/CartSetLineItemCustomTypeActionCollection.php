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
 * @extends CartUpdateActionCollection<CartSetLineItemCustomTypeAction>
 * @method CartSetLineItemCustomTypeAction current()
 * @method CartSetLineItemCustomTypeAction end()
 * @method CartSetLineItemCustomTypeAction at($offset)
 */
class CartSetLineItemCustomTypeActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetLineItemCustomTypeAction $value
     * @psalm-param CartSetLineItemCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetLineItemCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetLineItemCustomTypeAction $data */
                $data = CartSetLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
