<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShoppingListStoreSetMessage>
 * @method ShoppingListStoreSetMessage current()
 * @method ShoppingListStoreSetMessage at($offset)
 */
class ShoppingListStoreSetMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListStoreSetMessage $value
     * @psalm-param ShoppingListStoreSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListStoreSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListStoreSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListStoreSetMessage
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListStoreSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListStoreSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
