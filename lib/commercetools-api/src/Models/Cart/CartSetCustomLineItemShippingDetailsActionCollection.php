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
 * @extends CartUpdateActionCollection<CartSetCustomLineItemShippingDetailsAction>
 * @method CartSetCustomLineItemShippingDetailsAction current()
 * @method CartSetCustomLineItemShippingDetailsAction at($offset)
 */
class CartSetCustomLineItemShippingDetailsActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetCustomLineItemShippingDetailsAction $value
     * @psalm-param CartSetCustomLineItemShippingDetailsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetCustomLineItemShippingDetailsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetCustomLineItemShippingDetailsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetCustomLineItemShippingDetailsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetCustomLineItemShippingDetailsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetCustomLineItemShippingDetailsAction $data */
                $data = CartSetCustomLineItemShippingDetailsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
