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
 * @extends MapperSequence<MyShoppingListAddLineItemAction>
 *
 * @method MyShoppingListAddLineItemAction current()
 * @method MyShoppingListAddLineItemAction at($offset)
 */
class MyShoppingListAddLineItemActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyShoppingListAddLineItemAction $value
     * @psalm-param MyShoppingListAddLineItemAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListAddLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListAddLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListAddLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListAddLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyShoppingListAddLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
