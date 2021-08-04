<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyShoppingListUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyShoppingListUpdateActionCollection<MyShoppingListChangeLineItemsOrderAction>
 * @method MyShoppingListChangeLineItemsOrderAction current()
 * @method MyShoppingListChangeLineItemsOrderAction end()
 * @method MyShoppingListChangeLineItemsOrderAction at($offset)
 */
class MyShoppingListChangeLineItemsOrderActionCollection extends MyShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert MyShoppingListChangeLineItemsOrderAction $value
     * @psalm-param MyShoppingListChangeLineItemsOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListChangeLineItemsOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListChangeLineItemsOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListChangeLineItemsOrderAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyShoppingListChangeLineItemsOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyShoppingListChangeLineItemsOrderAction $data */
                $data = MyShoppingListChangeLineItemsOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
