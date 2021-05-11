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
 * @extends MessagePayloadCollection<OrderStateChangedMessagePayload>
 * @method OrderStateChangedMessagePayload current()
 * @method OrderStateChangedMessagePayload at($offset)
 */
class OrderStateChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert OrderStateChangedMessagePayload $value
     * @psalm-param OrderStateChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderStateChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderStateChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderStateChangedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?OrderStateChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderStateChangedMessagePayload $data */
                $data = OrderStateChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
