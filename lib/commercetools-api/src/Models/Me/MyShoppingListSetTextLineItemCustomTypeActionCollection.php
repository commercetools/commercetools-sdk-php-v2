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
 * @extends MyShoppingListUpdateActionCollection<MyShoppingListSetTextLineItemCustomTypeAction>
 * @method MyShoppingListSetTextLineItemCustomTypeAction current()
 * @method MyShoppingListSetTextLineItemCustomTypeAction at($offset)
 */
class MyShoppingListSetTextLineItemCustomTypeActionCollection extends MyShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert MyShoppingListSetTextLineItemCustomTypeAction $value
     * @psalm-param MyShoppingListSetTextLineItemCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListSetTextLineItemCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListSetTextLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListSetTextLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListSetTextLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyShoppingListSetTextLineItemCustomTypeAction $data */
                $data = MyShoppingListSetTextLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
