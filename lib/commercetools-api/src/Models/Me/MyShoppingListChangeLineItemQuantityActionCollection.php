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
 * @extends MapperSequence<MyShoppingListChangeLineItemQuantityAction>
 * @method MyShoppingListChangeLineItemQuantityAction current()
 * @method MyShoppingListChangeLineItemQuantityAction at($offset)
 */
class MyShoppingListChangeLineItemQuantityActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyShoppingListChangeLineItemQuantityAction $value
     * @psalm-param MyShoppingListChangeLineItemQuantityAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListChangeLineItemQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListChangeLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListChangeLineItemQuantityAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListChangeLineItemQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyShoppingListChangeLineItemQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
