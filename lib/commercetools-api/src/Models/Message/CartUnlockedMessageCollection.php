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
 * @extends MessageCollection<CartUnlockedMessage>
 * @method CartUnlockedMessage current()
 * @method CartUnlockedMessage end()
 * @method CartUnlockedMessage at($offset)
 */
class CartUnlockedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CartUnlockedMessage $value
     * @psalm-param CartUnlockedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartUnlockedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartUnlockedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartUnlockedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CartUnlockedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartUnlockedMessage $data */
                $data = CartUnlockedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
