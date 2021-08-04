<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyShoppingListUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyShoppingListUpdateActionCollection<MyShoppingListChangeTextLineItemQuantityAction>
 * @method MyShoppingListChangeTextLineItemQuantityAction current()
 * @method MyShoppingListChangeTextLineItemQuantityAction end()
 * @method MyShoppingListChangeTextLineItemQuantityAction at($offset)
 */
class MyShoppingListChangeTextLineItemQuantityActionCollection extends MyShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert MyShoppingListChangeTextLineItemQuantityAction $value
     * @psalm-param MyShoppingListChangeTextLineItemQuantityAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListChangeTextLineItemQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListChangeTextLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListChangeTextLineItemQuantityAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyShoppingListChangeTextLineItemQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyShoppingListChangeTextLineItemQuantityAction $data */
                $data = MyShoppingListChangeTextLineItemQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
