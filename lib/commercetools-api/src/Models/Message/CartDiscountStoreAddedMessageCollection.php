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
 * @extends MessageCollection<CartDiscountStoreAddedMessage>
 * @method CartDiscountStoreAddedMessage current()
 * @method CartDiscountStoreAddedMessage end()
 * @method CartDiscountStoreAddedMessage at($offset)
 */
class CartDiscountStoreAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CartDiscountStoreAddedMessage $value
     * @psalm-param CartDiscountStoreAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountStoreAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountStoreAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountStoreAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountStoreAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountStoreAddedMessage $data */
                $data = CartDiscountStoreAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
