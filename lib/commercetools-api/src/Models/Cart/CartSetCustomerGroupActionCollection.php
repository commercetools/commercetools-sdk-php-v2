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
 * @extends CartUpdateActionCollection<CartSetCustomerGroupAction>
 * @method CartSetCustomerGroupAction current()
 * @method CartSetCustomerGroupAction at($offset)
 */
class CartSetCustomerGroupActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetCustomerGroupAction $value
     * @psalm-param CartSetCustomerGroupAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetCustomerGroupActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetCustomerGroupAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetCustomerGroupAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetCustomerGroupAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetCustomerGroupAction $data */
                $data = CartSetCustomerGroupActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
