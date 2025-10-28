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
 * @extends MessageCollection<CartUnfrozenMessage>
 * @method CartUnfrozenMessage current()
 * @method CartUnfrozenMessage end()
 * @method CartUnfrozenMessage at($offset)
 */
class CartUnfrozenMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CartUnfrozenMessage $value
     * @psalm-param CartUnfrozenMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartUnfrozenMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartUnfrozenMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartUnfrozenMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CartUnfrozenMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartUnfrozenMessage $data */
                $data = CartUnfrozenMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
