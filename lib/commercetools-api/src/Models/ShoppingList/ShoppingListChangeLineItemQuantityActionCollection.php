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
 * @extends MapperSequence<ShoppingListChangeLineItemQuantityAction>
 * @method ShoppingListChangeLineItemQuantityAction current()
 * @method ShoppingListChangeLineItemQuantityAction at($offset)
 */
class ShoppingListChangeLineItemQuantityActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListChangeLineItemQuantityAction $value
     * @psalm-param ShoppingListChangeLineItemQuantityAction|stdClass $value
     * @return ShoppingListChangeLineItemQuantityActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListChangeLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListChangeLineItemQuantityAction
     */
    protected function mapper()
    {
        return function(int $index): ?ShoppingListChangeLineItemQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListChangeLineItemQuantityActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}