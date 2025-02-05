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
 * @extends ShoppingListUpdateActionCollection<ShoppingListSetBusinessUnitAction>
 * @method ShoppingListSetBusinessUnitAction current()
 * @method ShoppingListSetBusinessUnitAction end()
 * @method ShoppingListSetBusinessUnitAction at($offset)
 */
class ShoppingListSetBusinessUnitActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert ShoppingListSetBusinessUnitAction $value
     * @psalm-param ShoppingListSetBusinessUnitAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListSetBusinessUnitActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListSetBusinessUnitAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListSetBusinessUnitAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListSetBusinessUnitAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListSetBusinessUnitAction $data */
                $data = ShoppingListSetBusinessUnitActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
