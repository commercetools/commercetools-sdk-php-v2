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
 * @extends MapperSequence<CartSetLineItemShippingDetailsAction>
 *
 * @method CartSetLineItemShippingDetailsAction current()
 * @method CartSetLineItemShippingDetailsAction at($offset)
 */
class CartSetLineItemShippingDetailsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetLineItemShippingDetailsAction $value
     * @psalm-param CartSetLineItemShippingDetailsAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartSetLineItemShippingDetailsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetLineItemShippingDetailsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetLineItemShippingDetailsAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetLineItemShippingDetailsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetLineItemShippingDetailsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
