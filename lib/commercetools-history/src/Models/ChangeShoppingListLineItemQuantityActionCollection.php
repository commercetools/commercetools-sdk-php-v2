<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChangeShoppingListLineItemQuantityAction>
 * @method ChangeShoppingListLineItemQuantityAction current()
 * @method ChangeShoppingListLineItemQuantityAction at($offset)
 */
class ChangeShoppingListLineItemQuantityActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeShoppingListLineItemQuantityAction $value
     * @psalm-param ChangeShoppingListLineItemQuantityAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeShoppingListLineItemQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeShoppingListLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeShoppingListLineItemQuantityAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeShoppingListLineItemQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeShoppingListLineItemQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
