<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShoppingListSetTextLineItemCustomTypeAction>
 * @method ShoppingListSetTextLineItemCustomTypeAction current()
 * @method ShoppingListSetTextLineItemCustomTypeAction at($offset)
 */
class ShoppingListSetTextLineItemCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListSetTextLineItemCustomTypeAction $value
     * @psalm-param ShoppingListSetTextLineItemCustomTypeAction|stdClass $value
     * @return ShoppingListSetTextLineItemCustomTypeActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListSetTextLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListSetTextLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function(int $index): ?ShoppingListSetTextLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListSetTextLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}