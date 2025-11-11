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
 * @extends MessagePayloadCollection<OrderPaymentRemovedMessagePayload>
 * @method OrderPaymentRemovedMessagePayload current()
 * @method OrderPaymentRemovedMessagePayload end()
 * @method OrderPaymentRemovedMessagePayload at($offset)
 */
class OrderPaymentRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert OrderPaymentRemovedMessagePayload $value
     * @psalm-param OrderPaymentRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderPaymentRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderPaymentRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderPaymentRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderPaymentRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderPaymentRemovedMessagePayload $data */
                $data = OrderPaymentRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
