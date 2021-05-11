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
 * @extends MyShoppingListUpdateActionCollection<MyShoppingListSetDescriptionAction>
 * @method MyShoppingListSetDescriptionAction current()
 * @method MyShoppingListSetDescriptionAction at($offset)
 */
class MyShoppingListSetDescriptionActionCollection extends MyShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert MyShoppingListSetDescriptionAction $value
     * @psalm-param MyShoppingListSetDescriptionAction|stdClass $value
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
                /** @var MyShoppingListSetDescriptionAction $data */
                $data = MyShoppingListSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
