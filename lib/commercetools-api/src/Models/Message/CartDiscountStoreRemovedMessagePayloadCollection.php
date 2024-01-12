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
 * @extends MessagePayloadCollection<CartDiscountStoreRemovedMessagePayload>
 * @method CartDiscountStoreRemovedMessagePayload current()
 * @method CartDiscountStoreRemovedMessagePayload end()
 * @method CartDiscountStoreRemovedMessagePayload at($offset)
 */
class CartDiscountStoreRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CartDiscountStoreRemovedMessagePayload $value
     * @psalm-param CartDiscountStoreRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountStoreRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountStoreRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountStoreRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountStoreRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountStoreRemovedMessagePayload $data */
                $data = CartDiscountStoreRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
