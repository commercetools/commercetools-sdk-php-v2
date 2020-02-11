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
 * @extends MapperSequence<ShoppingListSetDescriptionAction>
 * @method ShoppingListSetDescriptionAction current()
 * @method ShoppingListSetDescriptionAction at($offset)
 */
class ShoppingListSetDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListSetDescriptionAction $value
     * @psalm-param ShoppingListSetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListSetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListSetDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
