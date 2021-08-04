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
 * @extends MyShoppingListUpdateActionCollection<MyShoppingListAddLineItemAction>
 * @method MyShoppingListAddLineItemAction current()
 * @method MyShoppingListAddLineItemAction end()
 * @method MyShoppingListAddLineItemAction at($offset)
 */
class MyShoppingListAddLineItemActionCollection extends MyShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert MyShoppingListAddLineItemAction $value
     * @psalm-param MyShoppingListAddLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListAddLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListAddLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListAddLineItemAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyShoppingListAddLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyShoppingListAddLineItemAction $data */
                $data = MyShoppingListAddLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
