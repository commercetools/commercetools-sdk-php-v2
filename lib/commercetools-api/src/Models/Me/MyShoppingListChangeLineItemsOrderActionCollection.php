<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MyShoppingListChangeLineItemsOrderAction>
 * @method MyShoppingListChangeLineItemsOrderAction current()
 * @method MyShoppingListChangeLineItemsOrderAction at($offset)
 */
class MyShoppingListChangeLineItemsOrderActionCollection extends MapperSequence
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
        return function (int $index): ?MyShoppingListChangeLineItemsOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyShoppingListChangeLineItemsOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
