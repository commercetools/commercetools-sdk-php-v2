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
 * @extends ShoppingListUpdateActionCollection<ShoppingListSetLineItemCustomFieldAction>
 * @method ShoppingListSetLineItemCustomFieldAction current()
 * @method ShoppingListSetLineItemCustomFieldAction at($offset)
 */
class ShoppingListSetLineItemCustomFieldActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert ShoppingListSetLineItemCustomFieldAction $value
     * @psalm-param ShoppingListSetLineItemCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListSetLineItemCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListSetLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListSetLineItemCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListSetLineItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListSetLineItemCustomFieldAction $data */
                $data = ShoppingListSetLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
