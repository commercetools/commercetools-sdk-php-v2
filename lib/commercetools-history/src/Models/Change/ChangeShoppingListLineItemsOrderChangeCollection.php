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
 * @extends ChangeCollection<ChangeShoppingListLineItemsOrderChange>
 * @method ChangeShoppingListLineItemsOrderChange current()
 * @method ChangeShoppingListLineItemsOrderChange at($offset)
 */
class ChangeShoppingListLineItemsOrderChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeShoppingListLineItemsOrderChange $value
     * @psalm-param ChangeShoppingListLineItemsOrderChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeShoppingListLineItemsOrderChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeShoppingListLineItemsOrderChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeShoppingListLineItemsOrderChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeShoppingListLineItemsOrderChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeShoppingListLineItemsOrderChange $data */
                $data = ChangeShoppingListLineItemsOrderChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
