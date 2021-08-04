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
 * @extends ShoppingListUpdateActionCollection<ShoppingListSetSlugAction>
 * @method ShoppingListSetSlugAction current()
 * @method ShoppingListSetSlugAction at($offset)
 */
class ShoppingListSetSlugActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert ShoppingListSetSlugAction $value
     * @psalm-param ShoppingListSetSlugAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListSetSlugActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListSetSlugAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListSetSlugAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListSetSlugAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListSetSlugAction $data */
                $data = ShoppingListSetSlugActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
