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
 * @extends MyShoppingListUpdateActionCollection<MyShoppingListRemoveTextLineItemAction>
 * @method MyShoppingListRemoveTextLineItemAction current()
 * @method MyShoppingListRemoveTextLineItemAction at($offset)
 */
class MyShoppingListRemoveTextLineItemActionCollection extends MyShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert MyShoppingListRemoveTextLineItemAction $value
     * @psalm-param MyShoppingListRemoveTextLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListRemoveTextLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListRemoveTextLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListRemoveTextLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListRemoveTextLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyShoppingListRemoveTextLineItemAction $data */
                $data = MyShoppingListRemoveTextLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
