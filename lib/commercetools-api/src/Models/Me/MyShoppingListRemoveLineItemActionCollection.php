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
 * @extends MyShoppingListUpdateActionCollection<MyShoppingListRemoveLineItemAction>
 * @method MyShoppingListRemoveLineItemAction current()
 * @method MyShoppingListRemoveLineItemAction end()
 * @method MyShoppingListRemoveLineItemAction at($offset)
 */
class MyShoppingListRemoveLineItemActionCollection extends MyShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert MyShoppingListRemoveLineItemAction $value
     * @psalm-param MyShoppingListRemoveLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListRemoveLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListRemoveLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListRemoveLineItemAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyShoppingListRemoveLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyShoppingListRemoveLineItemAction $data */
                $data = MyShoppingListRemoveLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
