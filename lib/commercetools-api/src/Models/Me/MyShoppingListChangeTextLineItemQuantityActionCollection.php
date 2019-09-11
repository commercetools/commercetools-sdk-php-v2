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
 * @extends MapperSequence<MyShoppingListChangeTextLineItemQuantityAction>
 *
 * @method MyShoppingListChangeTextLineItemQuantityAction current()
 * @method MyShoppingListChangeTextLineItemQuantityAction at($offset)
 */
class MyShoppingListChangeTextLineItemQuantityActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyShoppingListChangeTextLineItemQuantityAction $value
     * @psalm-param MyShoppingListChangeTextLineItemQuantityAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListChangeTextLineItemQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListChangeTextLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListChangeTextLineItemQuantityAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListChangeTextLineItemQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyShoppingListChangeTextLineItemQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
