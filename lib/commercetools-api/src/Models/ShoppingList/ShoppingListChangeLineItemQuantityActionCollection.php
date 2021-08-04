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
 * @extends ShoppingListUpdateActionCollection<ShoppingListChangeLineItemQuantityAction>
 * @method ShoppingListChangeLineItemQuantityAction current()
 * @method ShoppingListChangeLineItemQuantityAction at($offset)
 */
class ShoppingListChangeLineItemQuantityActionCollection extends ShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert ShoppingListChangeLineItemQuantityAction $value
     * @psalm-param ShoppingListChangeLineItemQuantityAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListChangeLineItemQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListChangeLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListChangeLineItemQuantityAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListChangeLineItemQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListChangeLineItemQuantityAction $data */
                $data = ShoppingListChangeLineItemQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
