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
 * @extends MessagePayloadCollection<CartDiscountStoreAddedMessagePayload>
 * @method CartDiscountStoreAddedMessagePayload current()
 * @method CartDiscountStoreAddedMessagePayload end()
 * @method CartDiscountStoreAddedMessagePayload at($offset)
 */
class CartDiscountStoreAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CartDiscountStoreAddedMessagePayload $value
     * @psalm-param CartDiscountStoreAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountStoreAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountStoreAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountStoreAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountStoreAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountStoreAddedMessagePayload $data */
                $data = CartDiscountStoreAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
