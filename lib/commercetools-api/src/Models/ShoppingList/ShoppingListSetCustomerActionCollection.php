<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShoppingListSetCustomerAction>
 *
 * @method ShoppingListSetCustomerAction current()
 * @method ShoppingListSetCustomerAction at($offset)
 */
class ShoppingListSetCustomerActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListSetCustomerAction $value
     * @psalm-param ShoppingListSetCustomerAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ShoppingListSetCustomerActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListSetCustomerAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListSetCustomerAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListSetCustomerAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListSetCustomerActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
