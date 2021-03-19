<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChangeShoppingListLineItemQuantityChange>
 * @method ChangeShoppingListLineItemQuantityChange current()
 * @method ChangeShoppingListLineItemQuantityChange at($offset)
 */
class ChangeShoppingListLineItemQuantityChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeShoppingListLineItemQuantityChange $value
     * @psalm-param ChangeShoppingListLineItemQuantityChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeShoppingListLineItemQuantityChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeShoppingListLineItemQuantityChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeShoppingListLineItemQuantityChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeShoppingListLineItemQuantityChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeShoppingListLineItemQuantityChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
