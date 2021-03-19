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
 * @extends MapperSequence<RemoveShoppingListLineItemChange>
 * @method RemoveShoppingListLineItemChange current()
 * @method RemoveShoppingListLineItemChange at($offset)
 */
class RemoveShoppingListLineItemChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveShoppingListLineItemChange $value
     * @psalm-param RemoveShoppingListLineItemChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveShoppingListLineItemChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveShoppingListLineItemChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveShoppingListLineItemChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveShoppingListLineItemChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveShoppingListLineItemChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
