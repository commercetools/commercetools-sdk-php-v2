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
 * @extends MapperSequence<ShoppingListAddTextLineItemAction>
 *
 * @method ShoppingListAddTextLineItemAction current()
 * @method ShoppingListAddTextLineItemAction at($offset)
 */
class ShoppingListAddTextLineItemActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListAddTextLineItemAction $value
     * @psalm-param ShoppingListAddTextLineItemAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ShoppingListAddTextLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListAddTextLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListAddTextLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListAddTextLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListAddTextLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
