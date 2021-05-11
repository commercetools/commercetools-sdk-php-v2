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
 * @extends MyShoppingListUpdateActionCollection<MyShoppingListSetTextLineItemDescriptionAction>
 * @method MyShoppingListSetTextLineItemDescriptionAction current()
 * @method MyShoppingListSetTextLineItemDescriptionAction at($offset)
 */
class MyShoppingListSetTextLineItemDescriptionActionCollection extends MyShoppingListUpdateActionCollection
{
    /**
     * @psalm-assert MyShoppingListSetTextLineItemDescriptionAction $value
     * @psalm-param MyShoppingListSetTextLineItemDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListSetTextLineItemDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListSetTextLineItemDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListSetTextLineItemDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListSetTextLineItemDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyShoppingListSetTextLineItemDescriptionAction $data */
                $data = MyShoppingListSetTextLineItemDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
