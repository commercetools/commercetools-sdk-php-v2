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
 * @extends ShoppingListUpdateActionCollection<ShoppingListChangeNameAction>
 * @method ShoppingListChangeNameAction current()
 * @method ShoppingListChangeNameAction end()
 * @method ShoppingListChangeNameAction at($offset)
 */
class ShoppingListChangeNameActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert ShoppingListChangeNameAction $value
     * @psalm-param ShoppingListChangeNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListChangeNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListChangeNameAction $data */
                $data = ShoppingListChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
