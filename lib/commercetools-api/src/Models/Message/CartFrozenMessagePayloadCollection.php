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
 * @extends MessagePayloadCollection<CartFrozenMessagePayload>
 * @method CartFrozenMessagePayload current()
 * @method CartFrozenMessagePayload end()
 * @method CartFrozenMessagePayload at($offset)
 */
class CartFrozenMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CartFrozenMessagePayload $value
     * @psalm-param CartFrozenMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartFrozenMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartFrozenMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartFrozenMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CartFrozenMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartFrozenMessagePayload $data */
                $data = CartFrozenMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
