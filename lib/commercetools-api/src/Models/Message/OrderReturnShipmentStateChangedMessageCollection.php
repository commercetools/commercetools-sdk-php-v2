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
 * @extends MessageCollection<OrderReturnShipmentStateChangedMessage>
 * @method OrderReturnShipmentStateChangedMessage current()
 * @method OrderReturnShipmentStateChangedMessage at($offset)
 */
class OrderReturnShipmentStateChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert OrderReturnShipmentStateChangedMessage $value
     * @psalm-param OrderReturnShipmentStateChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderReturnShipmentStateChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderReturnShipmentStateChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderReturnShipmentStateChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderReturnShipmentStateChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderReturnShipmentStateChangedMessage $data */
                $data = OrderReturnShipmentStateChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
