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
 * @extends MapperSequence<MyShoppingListSetLineItemCustomTypeAction>
 * @method MyShoppingListSetLineItemCustomTypeAction current()
 * @method MyShoppingListSetLineItemCustomTypeAction at($offset)
 */
class MyShoppingListSetLineItemCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyShoppingListSetLineItemCustomTypeAction $value
     * @psalm-param MyShoppingListSetLineItemCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListSetLineItemCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListSetLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListSetLineItemCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListSetLineItemCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyShoppingListSetLineItemCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
