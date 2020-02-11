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
 * @extends MapperSequence<ShoppingListUpdate>
 * @method ShoppingListUpdate current()
 * @method ShoppingListUpdate at($offset)
 */
class ShoppingListUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListUpdate $value
     * @psalm-param ShoppingListUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListUpdate
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
