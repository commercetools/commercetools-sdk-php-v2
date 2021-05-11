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
 * @extends ShoppingListUpdateActionCollection<ShoppingListChangeTextLineItemsOrderAction>
 * @method ShoppingListChangeTextLineItemsOrderAction current()
 * @method ShoppingListChangeTextLineItemsOrderAction at($offset)
 */
class ShoppingListChangeTextLineItemsOrderActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert ShoppingListChangeTextLineItemsOrderAction $value
     * @psalm-param ShoppingListChangeTextLineItemsOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListChangeTextLineItemsOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListChangeTextLineItemsOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListChangeTextLineItemsOrderAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListChangeTextLineItemsOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListChangeTextLineItemsOrderAction $data */
                $data = ShoppingListChangeTextLineItemsOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
