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
 * @extends MapperSequence<MyShoppingListRemoveLineItemAction>
 *
 * @method MyShoppingListRemoveLineItemAction current()
 * @method MyShoppingListRemoveLineItemAction at($offset)
 */
class MyShoppingListRemoveLineItemActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyShoppingListRemoveLineItemAction $value
     * @psalm-param MyShoppingListRemoveLineItemAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListRemoveLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListRemoveLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListRemoveLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListRemoveLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyShoppingListRemoveLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
