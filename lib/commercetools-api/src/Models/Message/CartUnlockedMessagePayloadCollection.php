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
 * @extends MessagePayloadCollection<CartUnlockedMessagePayload>
 * @method CartUnlockedMessagePayload current()
 * @method CartUnlockedMessagePayload end()
 * @method CartUnlockedMessagePayload at($offset)
 */
class CartUnlockedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CartUnlockedMessagePayload $value
     * @psalm-param CartUnlockedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartUnlockedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartUnlockedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartUnlockedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CartUnlockedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartUnlockedMessagePayload $data */
                $data = CartUnlockedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
