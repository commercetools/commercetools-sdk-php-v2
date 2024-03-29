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
 * @extends MyShoppingListUpdateActionCollection<MyShoppingListSetCustomTypeAction>
 * @method MyShoppingListSetCustomTypeAction current()
 * @method MyShoppingListSetCustomTypeAction end()
 * @method MyShoppingListSetCustomTypeAction at($offset)
 */
class MyShoppingListSetCustomTypeActionCollection extends MyShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert MyShoppingListSetCustomTypeAction $value
     * @psalm-param MyShoppingListSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyShoppingListSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyShoppingListSetCustomTypeAction $data */
                $data = MyShoppingListSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
