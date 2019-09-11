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
 * @extends MapperSequence<MyShoppingListUpdateAction>
 *
 * @method MyShoppingListUpdateAction current()
 * @method MyShoppingListUpdateAction at($offset)
 */
class MyShoppingListUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyShoppingListUpdateAction $value
     * @psalm-param MyShoppingListUpdateAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyShoppingListUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
