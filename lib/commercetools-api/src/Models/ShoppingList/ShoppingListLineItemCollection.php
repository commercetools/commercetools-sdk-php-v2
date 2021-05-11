<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShoppingListLineItem>
 * @method ShoppingListLineItem current()
 * @method ShoppingListLineItem at($offset)
 */
class ShoppingListLineItemCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListLineItem $value
     * @psalm-param ShoppingListLineItem|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListLineItemCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListLineItem) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListLineItem
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListLineItem {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListLineItem $data */
                $data = ShoppingListLineItemModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
