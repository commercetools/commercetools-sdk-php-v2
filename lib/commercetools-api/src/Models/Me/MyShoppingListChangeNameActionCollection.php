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
 * @extends MapperSequence<MyShoppingListChangeNameAction>
 * @method MyShoppingListChangeNameAction current()
 * @method MyShoppingListChangeNameAction at($offset)
 */
class MyShoppingListChangeNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyShoppingListChangeNameAction $value
     * @psalm-param MyShoppingListChangeNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListChangeNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyShoppingListChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
