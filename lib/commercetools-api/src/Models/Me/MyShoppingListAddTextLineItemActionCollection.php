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
 * @extends MyShoppingListUpdateActionCollection<MyShoppingListAddTextLineItemAction>
 * @method MyShoppingListAddTextLineItemAction current()
 * @method MyShoppingListAddTextLineItemAction at($offset)
 */
class MyShoppingListAddTextLineItemActionCollection extends MyShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert MyShoppingListAddTextLineItemAction $value
     * @psalm-param MyShoppingListAddTextLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListAddTextLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListAddTextLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListAddTextLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListAddTextLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyShoppingListAddTextLineItemAction $data */
                $data = MyShoppingListAddTextLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
