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
 * @extends MapperSequence<AddShoppingListLineItemAction>
 * @method AddShoppingListLineItemAction current()
 * @method AddShoppingListLineItemAction at($offset)
 */
class AddShoppingListLineItemActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddShoppingListLineItemAction $value
     * @psalm-param AddShoppingListLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddShoppingListLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddShoppingListLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddShoppingListLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddShoppingListLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddShoppingListLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
