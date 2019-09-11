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
 * @extends MapperSequence<MyShoppingListSetLineItemCustomFieldAction>
 *
 * @method MyShoppingListSetLineItemCustomFieldAction current()
 * @method MyShoppingListSetLineItemCustomFieldAction at($offset)
 */
class MyShoppingListSetLineItemCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyShoppingListSetLineItemCustomFieldAction $value
     * @psalm-param MyShoppingListSetLineItemCustomFieldAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListSetLineItemCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListSetLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListSetLineItemCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListSetLineItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyShoppingListSetLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
