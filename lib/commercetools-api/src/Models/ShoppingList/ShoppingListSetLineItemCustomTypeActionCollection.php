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
 * @extends MapperSequence<ShoppingListSetLineItemCustomTypeAction>
 * @method ShoppingListSetLineItemCustomTypeAction current()
 * @method ShoppingListSetLineItemCustomTypeAction at($offset)
 */
class ShoppingListSetLineItemCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListSetLineItemCustomTypeAction $value
     * @psalm-param ShoppingListSetLineItemCustomTypeAction|stdClass $value
     * @return ShoppingListSetLineItemCustomTypeActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListSetLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListSetLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function(int $index): ?ShoppingListSetLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListSetLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}