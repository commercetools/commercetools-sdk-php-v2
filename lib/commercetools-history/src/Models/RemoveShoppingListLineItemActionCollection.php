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
 * @extends MapperSequence<RemoveShoppingListLineItemAction>
 * @method RemoveShoppingListLineItemAction current()
 * @method RemoveShoppingListLineItemAction at($offset)
 */
class RemoveShoppingListLineItemActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveShoppingListLineItemAction $value
     * @psalm-param RemoveShoppingListLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveShoppingListLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveShoppingListLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveShoppingListLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveShoppingListLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveShoppingListLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
