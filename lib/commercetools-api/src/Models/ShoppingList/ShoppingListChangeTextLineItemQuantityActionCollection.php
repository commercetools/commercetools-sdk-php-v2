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
 * @extends MapperSequence<ShoppingListChangeTextLineItemQuantityAction>
 * @method ShoppingListChangeTextLineItemQuantityAction current()
 * @method ShoppingListChangeTextLineItemQuantityAction at($offset)
 */
class ShoppingListChangeTextLineItemQuantityActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListChangeTextLineItemQuantityAction $value
     * @psalm-param ShoppingListChangeTextLineItemQuantityAction|stdClass $value
     * @return ShoppingListChangeTextLineItemQuantityActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListChangeTextLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListChangeTextLineItemQuantityAction
     */
    protected function mapper()
    {
        return function(int $index): ?ShoppingListChangeTextLineItemQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListChangeTextLineItemQuantityActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}