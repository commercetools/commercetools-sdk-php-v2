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
 * @extends ShoppingListUpdateActionCollection<ShoppingListChangeTextLineItemNameAction>
 * @method ShoppingListChangeTextLineItemNameAction current()
 * @method ShoppingListChangeTextLineItemNameAction at($offset)
 */
class ShoppingListChangeTextLineItemNameActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert ShoppingListChangeTextLineItemNameAction $value
     * @psalm-param ShoppingListChangeTextLineItemNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListChangeTextLineItemNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListChangeTextLineItemNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListChangeTextLineItemNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListChangeTextLineItemNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListChangeTextLineItemNameAction $data */
                $data = ShoppingListChangeTextLineItemNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
