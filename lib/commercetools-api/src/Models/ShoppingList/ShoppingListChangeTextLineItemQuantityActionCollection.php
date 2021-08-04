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
 * @extends ShoppingListUpdateActionCollection<ShoppingListChangeTextLineItemQuantityAction>
 * @method ShoppingListChangeTextLineItemQuantityAction current()
 * @method ShoppingListChangeTextLineItemQuantityAction end()
 * @method ShoppingListChangeTextLineItemQuantityAction at($offset)
 */
class ShoppingListChangeTextLineItemQuantityActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert ShoppingListChangeTextLineItemQuantityAction $value
     * @psalm-param ShoppingListChangeTextLineItemQuantityAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListChangeTextLineItemQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListChangeTextLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListChangeTextLineItemQuantityAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListChangeTextLineItemQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListChangeTextLineItemQuantityAction $data */
                $data = ShoppingListChangeTextLineItemQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
