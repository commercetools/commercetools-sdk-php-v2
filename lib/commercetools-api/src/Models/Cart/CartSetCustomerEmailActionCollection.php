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
 * @extends MapperSequence<CartSetCustomerEmailAction>
 *
 * @method CartSetCustomerEmailAction current()
 * @method CartSetCustomerEmailAction at($offset)
 */
class CartSetCustomerEmailActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetCustomerEmailAction $value
     * @psalm-param CartSetCustomerEmailAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartSetCustomerEmailActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetCustomerEmailAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetCustomerEmailAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetCustomerEmailAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetCustomerEmailActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
