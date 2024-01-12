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
 * @extends MessagePayloadCollection<CartDiscountStoresSetMessagePayload>
 * @method CartDiscountStoresSetMessagePayload current()
 * @method CartDiscountStoresSetMessagePayload end()
 * @method CartDiscountStoresSetMessagePayload at($offset)
 */
class CartDiscountStoresSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CartDiscountStoresSetMessagePayload $value
     * @psalm-param CartDiscountStoresSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountStoresSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountStoresSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountStoresSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountStoresSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountStoresSetMessagePayload $data */
                $data = CartDiscountStoresSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
