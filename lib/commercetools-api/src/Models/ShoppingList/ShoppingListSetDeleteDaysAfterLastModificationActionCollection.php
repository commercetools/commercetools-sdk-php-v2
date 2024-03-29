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
 * @extends ShoppingListUpdateActionCollection<ShoppingListSetDeleteDaysAfterLastModificationAction>
 * @method ShoppingListSetDeleteDaysAfterLastModificationAction current()
 * @method ShoppingListSetDeleteDaysAfterLastModificationAction end()
 * @method ShoppingListSetDeleteDaysAfterLastModificationAction at($offset)
 */
class ShoppingListSetDeleteDaysAfterLastModificationActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert ShoppingListSetDeleteDaysAfterLastModificationAction $value
     * @psalm-param ShoppingListSetDeleteDaysAfterLastModificationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListSetDeleteDaysAfterLastModificationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListSetDeleteDaysAfterLastModificationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListSetDeleteDaysAfterLastModificationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListSetDeleteDaysAfterLastModificationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListSetDeleteDaysAfterLastModificationAction $data */
                $data = ShoppingListSetDeleteDaysAfterLastModificationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
