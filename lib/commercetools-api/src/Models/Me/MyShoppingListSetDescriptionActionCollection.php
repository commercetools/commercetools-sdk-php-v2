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
 * @extends MapperSequence<MyShoppingListSetDescriptionAction>
 *
 * @method MyShoppingListSetDescriptionAction current()
 * @method MyShoppingListSetDescriptionAction at($offset)
 */
class MyShoppingListSetDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyShoppingListSetDescriptionAction $value
     * @psalm-param MyShoppingListSetDescriptionAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListSetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListSetDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyShoppingListSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
