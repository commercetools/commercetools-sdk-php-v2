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
 * @extends ShoppingListUpdateActionCollection<ShoppingListChangeLineItemsOrderAction>
 * @method ShoppingListChangeLineItemsOrderAction current()
 * @method ShoppingListChangeLineItemsOrderAction end()
 * @method ShoppingListChangeLineItemsOrderAction at($offset)
 */
class ShoppingListChangeLineItemsOrderActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert ShoppingListChangeLineItemsOrderAction $value
     * @psalm-param ShoppingListChangeLineItemsOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListChangeLineItemsOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListChangeLineItemsOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListChangeLineItemsOrderAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListChangeLineItemsOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListChangeLineItemsOrderAction $data */
                $data = ShoppingListChangeLineItemsOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
