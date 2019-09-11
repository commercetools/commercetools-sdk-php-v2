<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MyShoppingListSetCustomTypeAction>
 *
 * @method MyShoppingListSetCustomTypeAction current()
 * @method MyShoppingListSetCustomTypeAction at($offset)
 */
class MyShoppingListSetCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyShoppingListSetCustomTypeAction $value
     * @psalm-param MyShoppingListSetCustomTypeAction|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?MyShoppingListSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyShoppingListSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
