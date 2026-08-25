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
 * @extends MessagePayloadCollection<CartEstimatedDeliverySetMessagePayload>
 * @method CartEstimatedDeliverySetMessagePayload current()
 * @method CartEstimatedDeliverySetMessagePayload end()
 * @method CartEstimatedDeliverySetMessagePayload at($offset)
 */
class CartEstimatedDeliverySetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CartEstimatedDeliverySetMessagePayload $value
     * @psalm-param CartEstimatedDeliverySetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartEstimatedDeliverySetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartEstimatedDeliverySetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartEstimatedDeliverySetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CartEstimatedDeliverySetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartEstimatedDeliverySetMessagePayload $data */
                $data = CartEstimatedDeliverySetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
