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
 * @extends MessageCollection<CartDiscountStoreRemovedMessage>
 * @method CartDiscountStoreRemovedMessage current()
 * @method CartDiscountStoreRemovedMessage end()
 * @method CartDiscountStoreRemovedMessage at($offset)
 */
class CartDiscountStoreRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CartDiscountStoreRemovedMessage $value
     * @psalm-param CartDiscountStoreRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountStoreRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountStoreRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountStoreRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountStoreRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountStoreRemovedMessage $data */
                $data = CartDiscountStoreRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
