<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<CartLockedMessagePayload>
 * @method CartLockedMessagePayload current()
 * @method CartLockedMessagePayload end()
 * @method CartLockedMessagePayload at($offset)
 */
class CartLockedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CartLockedMessagePayload $value
     * @psalm-param CartLockedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartLockedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartLockedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartLockedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CartLockedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartLockedMessagePayload $data */
                $data = CartLockedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
