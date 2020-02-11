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
 * @extends MapperSequence<CartSetCustomerIdAction>
 * @method CartSetCustomerIdAction current()
 * @method CartSetCustomerIdAction at($offset)
 */
class CartSetCustomerIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetCustomerIdAction $value
     * @psalm-param CartSetCustomerIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetCustomerIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetCustomerIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetCustomerIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetCustomerIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetCustomerIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
