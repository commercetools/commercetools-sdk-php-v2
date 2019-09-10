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
 * @extends MapperSequence<ShoppingListChangeLineItemsOrderAction>
 *
 * @method ShoppingListChangeLineItemsOrderAction current()
 * @method ShoppingListChangeLineItemsOrderAction at($offset)
 */
class ShoppingListChangeLineItemsOrderActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListChangeLineItemsOrderAction $value
     * @psalm-param ShoppingListChangeLineItemsOrderAction|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?ShoppingListChangeLineItemsOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListChangeLineItemsOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
