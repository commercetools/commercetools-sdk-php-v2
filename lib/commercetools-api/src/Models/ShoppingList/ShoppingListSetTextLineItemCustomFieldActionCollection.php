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
 * @extends ShoppingListUpdateActionCollection<ShoppingListSetTextLineItemCustomFieldAction>
 * @method ShoppingListSetTextLineItemCustomFieldAction current()
 * @method ShoppingListSetTextLineItemCustomFieldAction end()
 * @method ShoppingListSetTextLineItemCustomFieldAction at($offset)
 */
class ShoppingListSetTextLineItemCustomFieldActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert ShoppingListSetTextLineItemCustomFieldAction $value
     * @psalm-param ShoppingListSetTextLineItemCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListSetTextLineItemCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListSetTextLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListSetTextLineItemCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListSetTextLineItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListSetTextLineItemCustomFieldAction $data */
                $data = ShoppingListSetTextLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
