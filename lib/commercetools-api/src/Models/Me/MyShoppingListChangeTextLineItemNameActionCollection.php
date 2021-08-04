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
 * @extends MyShoppingListUpdateActionCollection<MyShoppingListChangeTextLineItemNameAction>
 * @method MyShoppingListChangeTextLineItemNameAction current()
 * @method MyShoppingListChangeTextLineItemNameAction at($offset)
 */
class MyShoppingListChangeTextLineItemNameActionCollection extends MyShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert MyShoppingListChangeTextLineItemNameAction $value
     * @psalm-param MyShoppingListChangeTextLineItemNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListChangeTextLineItemNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListChangeTextLineItemNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListChangeTextLineItemNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyShoppingListChangeTextLineItemNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyShoppingListChangeTextLineItemNameAction $data */
                $data = MyShoppingListChangeTextLineItemNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
