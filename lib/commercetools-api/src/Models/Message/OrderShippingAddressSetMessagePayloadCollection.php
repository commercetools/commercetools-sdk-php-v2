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
 * @extends MessagePayloadCollection<OrderShippingAddressSetMessagePayload>
 * @method OrderShippingAddressSetMessagePayload current()
 * @method OrderShippingAddressSetMessagePayload end()
 * @method OrderShippingAddressSetMessagePayload at($offset)
 */
class OrderShippingAddressSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert OrderShippingAddressSetMessagePayload $value
     * @psalm-param OrderShippingAddressSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderShippingAddressSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderShippingAddressSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderShippingAddressSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderShippingAddressSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderShippingAddressSetMessagePayload $data */
                $data = OrderShippingAddressSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
