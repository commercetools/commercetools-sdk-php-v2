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
 * @extends MapperSequence<MyShoppingListSetTextLineItemCustomFieldAction>
 * @method MyShoppingListSetTextLineItemCustomFieldAction current()
 * @method MyShoppingListSetTextLineItemCustomFieldAction at($offset)
 */
class MyShoppingListSetTextLineItemCustomFieldActionCollection extends MapperSequence
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
                $data = MyShoppingListSetTextLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
