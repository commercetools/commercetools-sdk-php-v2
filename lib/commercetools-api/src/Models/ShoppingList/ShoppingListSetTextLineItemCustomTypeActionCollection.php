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
 * @extends ShoppingListUpdateActionCollection<ShoppingListSetTextLineItemCustomTypeAction>
 * @method ShoppingListSetTextLineItemCustomTypeAction current()
 * @method ShoppingListSetTextLineItemCustomTypeAction at($offset)
 */
class ShoppingListSetTextLineItemCustomTypeActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert ShoppingListSetTextLineItemCustomTypeAction $value
     * @psalm-param ShoppingListSetTextLineItemCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListSetTextLineItemCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListSetTextLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListSetTextLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListSetTextLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListSetTextLineItemCustomTypeAction $data */
                $data = ShoppingListSetTextLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
