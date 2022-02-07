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
 * @extends MessageCollection<OrderPaymentAddedMessage>
 * @method OrderPaymentAddedMessage current()
 * @method OrderPaymentAddedMessage end()
 * @method OrderPaymentAddedMessage at($offset)
 */
class OrderPaymentAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert OrderPaymentAddedMessage $value
     * @psalm-param OrderPaymentAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderPaymentAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderPaymentAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderPaymentAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderPaymentAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderPaymentAddedMessage $data */
                $data = OrderPaymentAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
