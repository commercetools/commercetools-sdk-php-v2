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
 * @extends ShoppingListUpdateActionCollection<ShoppingListSetAnonymousIdAction>
 * @method ShoppingListSetAnonymousIdAction current()
 * @method ShoppingListSetAnonymousIdAction end()
 * @method ShoppingListSetAnonymousIdAction at($offset)
 */
class ShoppingListSetAnonymousIdActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert ShoppingListSetAnonymousIdAction $value
     * @psalm-param ShoppingListSetAnonymousIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListSetAnonymousIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListSetAnonymousIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListSetAnonymousIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListSetAnonymousIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListSetAnonymousIdAction $data */
                $data = ShoppingListSetAnonymousIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
