<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\ShoppingList\ShoppingListUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ShoppingListUpdateActionCollection<ShoppingListSetCustomerAction>
 * @method ShoppingListSetCustomerAction current()
 * @method ShoppingListSetCustomerAction end()
 * @method ShoppingListSetCustomerAction at($offset)
 */
class ShoppingListSetCustomerActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert ShoppingListSetCustomerAction $value
     * @psalm-param ShoppingListSetCustomerAction|stdClass $value
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
        return function (?int $index): ?ShoppingListSetCustomerAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListSetCustomerAction $data */
                $data = ShoppingListSetCustomerActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
