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
 * @extends ShoppingListUpdateActionCollection<ShoppingListSetCustomTypeAction>
 * @method ShoppingListSetCustomTypeAction current()
 * @method ShoppingListSetCustomTypeAction at($offset)
 */
class ShoppingListSetCustomTypeActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert ShoppingListSetCustomTypeAction $value
     * @psalm-param ShoppingListSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListSetCustomTypeAction $data */
                $data = ShoppingListSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
