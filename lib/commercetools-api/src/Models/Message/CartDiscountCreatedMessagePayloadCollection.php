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
 * @extends MessagePayloadCollection<CartDiscountCreatedMessagePayload>
 * @method CartDiscountCreatedMessagePayload current()
 * @method CartDiscountCreatedMessagePayload end()
 * @method CartDiscountCreatedMessagePayload at($offset)
 */
class CartDiscountCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CartDiscountCreatedMessagePayload $value
     * @psalm-param CartDiscountCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountCreatedMessagePayload $data */
                $data = CartDiscountCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
