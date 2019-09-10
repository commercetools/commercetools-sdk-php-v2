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
 * @extends MapperSequence<ShoppingListSetCustomTypeAction>
 * @method ShoppingListSetCustomTypeAction current()
 * @method ShoppingListSetCustomTypeAction at($offset)
 */
class ShoppingListSetCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListSetCustomTypeAction $value
     * @psalm-param ShoppingListSetCustomTypeAction|stdClass $value
     * @return ShoppingListSetCustomTypeActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListSetCustomTypeAction
     */
    protected function mapper()
    {
        return function(int $index): ?ShoppingListSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}