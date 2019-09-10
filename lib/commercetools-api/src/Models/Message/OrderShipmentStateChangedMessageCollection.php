<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderShipmentStateChangedMessage>
 *
 * @method OrderShipmentStateChangedMessage current()
 * @method OrderShipmentStateChangedMessage at($offset)
 */
class OrderShipmentStateChangedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderShipmentStateChangedMessage $value
     * @psalm-param OrderShipmentStateChangedMessage|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return OrderShipmentStateChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderShipmentStateChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderShipmentStateChangedMessage
     */
    protected function mapper()
    {
        return function (int $index): ?OrderShipmentStateChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderShipmentStateChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
