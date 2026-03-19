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
 * @extends MessagePayloadCollection<CartUnfrozenMessagePayload>
 * @method CartUnfrozenMessagePayload current()
 * @method CartUnfrozenMessagePayload end()
 * @method CartUnfrozenMessagePayload at($offset)
 */
class CartUnfrozenMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CartUnfrozenMessagePayload $value
     * @psalm-param CartUnfrozenMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartUnfrozenMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartUnfrozenMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartUnfrozenMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CartUnfrozenMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartUnfrozenMessagePayload $data */
                $data = CartUnfrozenMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
