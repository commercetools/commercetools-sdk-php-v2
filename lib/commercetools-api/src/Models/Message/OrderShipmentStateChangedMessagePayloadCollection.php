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
 * @extends MessagePayloadCollection<OrderShipmentStateChangedMessagePayload>
 * @method OrderShipmentStateChangedMessagePayload current()
 * @method OrderShipmentStateChangedMessagePayload at($offset)
 */
class OrderShipmentStateChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert OrderShipmentStateChangedMessagePayload $value
     * @psalm-param OrderShipmentStateChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderShipmentStateChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderShipmentStateChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderShipmentStateChangedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?OrderShipmentStateChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderShipmentStateChangedMessagePayload $data */
                $data = OrderShipmentStateChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
