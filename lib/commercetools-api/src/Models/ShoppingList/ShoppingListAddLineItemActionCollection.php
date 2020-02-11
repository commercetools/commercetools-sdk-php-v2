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
 * @extends MapperSequence<ShoppingListAddLineItemAction>
 * @method ShoppingListAddLineItemAction current()
 * @method ShoppingListAddLineItemAction at($offset)
 */
class ShoppingListAddLineItemActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListAddLineItemAction $value
     * @psalm-param ShoppingListAddLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListAddLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListAddLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListAddLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListAddLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListAddLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
