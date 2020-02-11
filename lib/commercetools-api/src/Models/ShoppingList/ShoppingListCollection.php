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
 * @extends MapperSequence<ShoppingList>
 * @method ShoppingList current()
 * @method ShoppingList at($offset)
 */
class ShoppingListCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingList $value
     * @psalm-param ShoppingList|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingList) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingList
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingList {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
