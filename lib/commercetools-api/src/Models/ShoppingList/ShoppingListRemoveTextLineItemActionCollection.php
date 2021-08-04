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
 * @extends ShoppingListUpdateActionCollection<ShoppingListRemoveTextLineItemAction>
 * @method ShoppingListRemoveTextLineItemAction current()
 * @method ShoppingListRemoveTextLineItemAction end()
 * @method ShoppingListRemoveTextLineItemAction at($offset)
 */
class ShoppingListRemoveTextLineItemActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert ShoppingListRemoveTextLineItemAction $value
     * @psalm-param ShoppingListRemoveTextLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListRemoveTextLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListRemoveTextLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListRemoveTextLineItemAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListRemoveTextLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListRemoveTextLineItemAction $data */
                $data = ShoppingListRemoveTextLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
