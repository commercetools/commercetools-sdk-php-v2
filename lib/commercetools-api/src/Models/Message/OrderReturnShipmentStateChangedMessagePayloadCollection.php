<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessagePayloadCollection<OrderReturnShipmentStateChangedMessagePayload>
 * @method OrderReturnShipmentStateChangedMessagePayload current()
 * @method OrderReturnShipmentStateChangedMessagePayload end()
 * @method OrderReturnShipmentStateChangedMessagePayload at($offset)
 */
class OrderReturnShipmentStateChangedMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderReturnShipmentStateChangedMessagePayload $value
     * @psalm-param OrderReturnShipmentStateChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderReturnShipmentStateChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderReturnShipmentStateChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderReturnShipmentStateChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderReturnShipmentStateChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderReturnShipmentStateChangedMessagePayload $data */
                $data = OrderReturnShipmentStateChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
