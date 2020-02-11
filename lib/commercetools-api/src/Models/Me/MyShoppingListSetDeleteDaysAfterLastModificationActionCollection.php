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
 * @extends MapperSequence<MyShoppingListSetDeleteDaysAfterLastModificationAction>
 * @method MyShoppingListSetDeleteDaysAfterLastModificationAction current()
 * @method MyShoppingListSetDeleteDaysAfterLastModificationAction at($offset)
 */
class MyShoppingListSetDeleteDaysAfterLastModificationActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyShoppingListSetDeleteDaysAfterLastModificationAction $value
     * @psalm-param MyShoppingListSetDeleteDaysAfterLastModificationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListSetDeleteDaysAfterLastModificationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListSetDeleteDaysAfterLastModificationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListSetDeleteDaysAfterLastModificationAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListSetDeleteDaysAfterLastModificationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyShoppingListSetDeleteDaysAfterLastModificationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
