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
 * @extends MyShoppingListUpdateActionCollection<MyShoppingListSetCustomFieldAction>
 * @method MyShoppingListSetCustomFieldAction current()
 * @method MyShoppingListSetCustomFieldAction at($offset)
 */
class MyShoppingListSetCustomFieldActionCollection extends MyShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert MyShoppingListSetCustomFieldAction $value
     * @psalm-param MyShoppingListSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyShoppingListSetCustomFieldAction $data */
                $data = MyShoppingListSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
