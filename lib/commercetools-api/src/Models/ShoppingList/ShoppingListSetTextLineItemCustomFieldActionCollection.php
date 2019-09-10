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
 * @extends MapperSequence<ShoppingListSetTextLineItemCustomFieldAction>
 *
 * @method ShoppingListSetTextLineItemCustomFieldAction current()
 * @method ShoppingListSetTextLineItemCustomFieldAction at($offset)
 */
class ShoppingListSetTextLineItemCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListSetTextLineItemCustomFieldAction $value
     * @psalm-param ShoppingListSetTextLineItemCustomFieldAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ShoppingListSetTextLineItemCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListSetTextLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListSetTextLineItemCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListSetTextLineItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListSetTextLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
