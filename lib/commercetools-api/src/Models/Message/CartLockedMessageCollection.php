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
 * @extends MessageCollection<CartLockedMessage>
 * @method CartLockedMessage current()
 * @method CartLockedMessage end()
 * @method CartLockedMessage at($offset)
 */
class CartLockedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CartLockedMessage $value
     * @psalm-param CartLockedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartLockedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartLockedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartLockedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CartLockedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartLockedMessage $data */
                $data = CartLockedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
