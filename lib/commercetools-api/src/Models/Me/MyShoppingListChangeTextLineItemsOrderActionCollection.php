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
 * @extends MapperSequence<MyShoppingListChangeTextLineItemsOrderAction>
 *
 * @method MyShoppingListChangeTextLineItemsOrderAction current()
 * @method MyShoppingListChangeTextLineItemsOrderAction at($offset)
 */
class MyShoppingListChangeTextLineItemsOrderActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyShoppingListChangeTextLineItemsOrderAction $value
     * @psalm-param MyShoppingListChangeTextLineItemsOrderAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListChangeTextLineItemsOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListChangeTextLineItemsOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListChangeTextLineItemsOrderAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListChangeTextLineItemsOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyShoppingListChangeTextLineItemsOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
