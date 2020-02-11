<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShoppingListRemoveLineItemAction>
 * @method ShoppingListRemoveLineItemAction current()
 * @method ShoppingListRemoveLineItemAction at($offset)
 */
class ShoppingListRemoveLineItemActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListRemoveLineItemAction $value
     * @psalm-param ShoppingListRemoveLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListRemoveLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListRemoveLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListRemoveLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListRemoveLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListRemoveLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
