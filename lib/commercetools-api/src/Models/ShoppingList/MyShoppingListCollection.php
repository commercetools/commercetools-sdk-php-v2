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
 * @extends MapperSequence<MyShoppingList>
 * @method MyShoppingList current()
 * @method MyShoppingList at($offset)
 */
class MyShoppingListCollection extends MapperSequence
{
    /**
     * @psalm-assert MyShoppingList $value
     * @psalm-param MyShoppingList|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingList) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingList
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingList {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyShoppingListModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
