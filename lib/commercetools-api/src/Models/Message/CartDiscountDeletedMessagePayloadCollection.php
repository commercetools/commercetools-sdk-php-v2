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
 * @extends MessagePayloadCollection<CartDiscountDeletedMessagePayload>
 * @method CartDiscountDeletedMessagePayload current()
 * @method CartDiscountDeletedMessagePayload end()
 * @method CartDiscountDeletedMessagePayload at($offset)
 */
class CartDiscountDeletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CartDiscountDeletedMessagePayload $value
     * @psalm-param CartDiscountDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountDeletedMessagePayload $data */
                $data = CartDiscountDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
