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
 * @extends MapperSequence<ShoppingListSetCustomFieldAction>
 *
 * @method ShoppingListSetCustomFieldAction current()
 * @method ShoppingListSetCustomFieldAction at($offset)
 */
class ShoppingListSetCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListSetCustomFieldAction $value
     * @psalm-param ShoppingListSetCustomFieldAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ShoppingListSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
