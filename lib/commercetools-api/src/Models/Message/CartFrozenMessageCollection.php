<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<CartFrozenMessage>
 * @method CartFrozenMessage current()
 * @method CartFrozenMessage end()
 * @method CartFrozenMessage at($offset)
 */
class CartFrozenMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CartFrozenMessage $value
     * @psalm-param CartFrozenMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartFrozenMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartFrozenMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartFrozenMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CartFrozenMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartFrozenMessage $data */
                $data = CartFrozenMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
