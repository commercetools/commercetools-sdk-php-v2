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
 * @extends MapperSequence<ShoppingListStoreSetMessagePayload>
 * @method ShoppingListStoreSetMessagePayload current()
 * @method ShoppingListStoreSetMessagePayload at($offset)
 */
class ShoppingListStoreSetMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListStoreSetMessagePayload $value
     * @psalm-param ShoppingListStoreSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListStoreSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListStoreSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListStoreSetMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListStoreSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListStoreSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
