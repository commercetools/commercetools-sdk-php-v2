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
 * @extends MapperSequence<ShoppingListSetTextLineItemDescriptionAction>
 * @method ShoppingListSetTextLineItemDescriptionAction current()
 * @method ShoppingListSetTextLineItemDescriptionAction at($offset)
 */
class ShoppingListSetTextLineItemDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListSetTextLineItemDescriptionAction $value
     * @psalm-param ShoppingListSetTextLineItemDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListSetTextLineItemDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListSetTextLineItemDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListSetTextLineItemDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListSetTextLineItemDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListSetTextLineItemDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
