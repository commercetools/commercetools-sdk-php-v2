<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\ShoppingList\ShoppingListUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ShoppingListUpdateActionCollection<ShoppingListSetDescriptionAction>
 * @method ShoppingListSetDescriptionAction current()
 * @method ShoppingListSetDescriptionAction end()
 * @method ShoppingListSetDescriptionAction at($offset)
 */
class ShoppingListSetDescriptionActionCollection extends ShoppingListUpdateActionCollection
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
        return function (?int $index): ?ShoppingListSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListSetDescriptionAction $data */
                $data = ShoppingListSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
