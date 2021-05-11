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
 * @extends ShoppingListUpdateActionCollection<ShoppingListSetStoreAction>
 * @method ShoppingListSetStoreAction current()
 * @method ShoppingListSetStoreAction at($offset)
 */
class ShoppingListSetStoreActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert ShoppingListSetStoreAction $value
     * @psalm-param ShoppingListSetStoreAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListSetStoreActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListSetStoreAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListSetStoreAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListSetStoreAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListSetStoreAction $data */
                $data = ShoppingListSetStoreActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
