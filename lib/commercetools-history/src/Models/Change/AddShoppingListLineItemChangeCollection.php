<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<AddShoppingListLineItemChange>
 * @method AddShoppingListLineItemChange current()
 * @method AddShoppingListLineItemChange end()
 * @method AddShoppingListLineItemChange at($offset)
 */
class AddShoppingListLineItemChangeCollection extends ChangeCollection
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
        return function (?int $index): ?AddShoppingListLineItemChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddShoppingListLineItemChange $data */
                $data = AddShoppingListLineItemChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
