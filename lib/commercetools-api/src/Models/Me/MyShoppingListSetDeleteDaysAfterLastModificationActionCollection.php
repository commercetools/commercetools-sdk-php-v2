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
 * @extends MyShoppingListUpdateActionCollection<MyShoppingListSetDeleteDaysAfterLastModificationAction>
 * @method MyShoppingListSetDeleteDaysAfterLastModificationAction current()
 * @method MyShoppingListSetDeleteDaysAfterLastModificationAction end()
 * @method MyShoppingListSetDeleteDaysAfterLastModificationAction at($offset)
 */
class MyShoppingListSetDeleteDaysAfterLastModificationActionCollection extends MyShoppingListUpdateActionCollection
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
        return function (?int $index): ?MyShoppingListSetDeleteDaysAfterLastModificationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyShoppingListSetDeleteDaysAfterLastModificationAction $data */
                $data = MyShoppingListSetDeleteDaysAfterLastModificationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
