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
 * @extends MyShoppingListUpdateActionCollection<MyShoppingListSetTextLineItemCustomFieldAction>
 * @method MyShoppingListSetTextLineItemCustomFieldAction current()
 * @method MyShoppingListSetTextLineItemCustomFieldAction at($offset)
 */
class MyShoppingListSetTextLineItemCustomFieldActionCollection extends MyShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert MyShoppingListSetTextLineItemCustomFieldAction $value
     * @psalm-param MyShoppingListSetTextLineItemCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListSetTextLineItemCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListSetTextLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListSetTextLineItemCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListSetTextLineItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyShoppingListSetTextLineItemCustomFieldAction $data */
                $data = MyShoppingListSetTextLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
