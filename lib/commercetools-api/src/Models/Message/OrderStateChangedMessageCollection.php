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
 * @extends MessageCollection<OrderStateChangedMessage>
 * @method OrderStateChangedMessage current()
 * @method OrderStateChangedMessage at($offset)
 */
class OrderStateChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert OrderStateChangedMessage $value
     * @psalm-param OrderStateChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderStateChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderStateChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderStateChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderStateChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderStateChangedMessage $data */
                $data = OrderStateChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
