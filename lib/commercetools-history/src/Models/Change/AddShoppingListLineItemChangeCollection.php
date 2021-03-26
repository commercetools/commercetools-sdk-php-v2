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
 * @extends MapperSequence<AddShoppingListLineItemChange>
 * @method AddShoppingListLineItemChange current()
 * @method AddShoppingListLineItemChange at($offset)
 */
class AddShoppingListLineItemChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert AddShoppingListLineItemChange $value
     * @psalm-param AddShoppingListLineItemChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddShoppingListLineItemChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddShoppingListLineItemChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddShoppingListLineItemChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddShoppingListLineItemChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddShoppingListLineItemChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
