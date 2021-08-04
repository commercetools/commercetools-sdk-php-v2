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
 * @extends ChangeCollection<RemoveShoppingListLineItemChange>
 * @method RemoveShoppingListLineItemChange current()
 * @method RemoveShoppingListLineItemChange at($offset)
 */
class RemoveShoppingListLineItemChangeCollection extends ChangeCollection
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
        return function (?int $index): ?RemoveShoppingListLineItemChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveShoppingListLineItemChange $data */
                $data = RemoveShoppingListLineItemChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
