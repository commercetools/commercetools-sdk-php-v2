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
 * @extends MessagePayloadCollection<OrderPaymentStateChangedMessagePayload>
 * @method OrderPaymentStateChangedMessagePayload current()
 * @method OrderPaymentStateChangedMessagePayload end()
 * @method OrderPaymentStateChangedMessagePayload at($offset)
 */
class OrderPaymentStateChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert OrderPaymentStateChangedMessagePayload $value
     * @psalm-param OrderPaymentStateChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderPaymentStateChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderPaymentStateChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderPaymentStateChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderPaymentStateChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderPaymentStateChangedMessagePayload $data */
                $data = OrderPaymentStateChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
