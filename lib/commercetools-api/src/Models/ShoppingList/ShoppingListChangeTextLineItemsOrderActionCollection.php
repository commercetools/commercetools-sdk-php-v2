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
 * @extends MapperSequence<ShoppingListChangeTextLineItemsOrderAction>
 * @method ShoppingListChangeTextLineItemsOrderAction current()
 * @method ShoppingListChangeTextLineItemsOrderAction at($offset)
 */
class ShoppingListChangeTextLineItemsOrderActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListChangeTextLineItemsOrderAction $value
     * @psalm-param ShoppingListChangeTextLineItemsOrderAction|stdClass $value
     * @return ShoppingListChangeTextLineItemsOrderActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListChangeTextLineItemsOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListChangeTextLineItemsOrderAction
     */
    protected function mapper()
    {
        return function(int $index): ?ShoppingListChangeTextLineItemsOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListChangeTextLineItemsOrderActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}