<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessageCollection<OrderPaymentStateChangedMessage>
 * @method OrderPaymentStateChangedMessage current()
 * @method OrderPaymentStateChangedMessage end()
 * @method OrderPaymentStateChangedMessage at($offset)
 */
class OrderPaymentStateChangedMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert OrderPaymentStateChangedMessage $value
     * @psalm-param OrderPaymentStateChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderPaymentStateChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderPaymentStateChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderPaymentStateChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderPaymentStateChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderPaymentStateChangedMessage $data */
                $data = OrderPaymentStateChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
