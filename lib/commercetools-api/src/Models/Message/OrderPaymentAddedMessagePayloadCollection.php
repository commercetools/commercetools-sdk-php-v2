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
 * @extends MessagePayloadCollection<OrderPaymentAddedMessagePayload>
 * @method OrderPaymentAddedMessagePayload current()
 * @method OrderPaymentAddedMessagePayload end()
 * @method OrderPaymentAddedMessagePayload at($offset)
 */
class OrderPaymentAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert OrderPaymentAddedMessagePayload $value
     * @psalm-param OrderPaymentAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderPaymentAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderPaymentAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderPaymentAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderPaymentAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderPaymentAddedMessagePayload $data */
                $data = OrderPaymentAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
