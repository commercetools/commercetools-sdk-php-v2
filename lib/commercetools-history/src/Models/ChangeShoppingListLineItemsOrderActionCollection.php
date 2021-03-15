<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChangeShoppingListLineItemsOrderAction>
 * @method ChangeShoppingListLineItemsOrderAction current()
 * @method ChangeShoppingListLineItemsOrderAction at($offset)
 */
class ChangeShoppingListLineItemsOrderActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeShoppingListLineItemsOrderAction $value
     * @psalm-param ChangeShoppingListLineItemsOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeShoppingListLineItemsOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeShoppingListLineItemsOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeShoppingListLineItemsOrderAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeShoppingListLineItemsOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeShoppingListLineItemsOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
