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
 * @extends OrderMessagePayloadCollection<OrderLineItemAddedMessagePayload>
 * @method OrderLineItemAddedMessagePayload current()
 * @method OrderLineItemAddedMessagePayload end()
 * @method OrderLineItemAddedMessagePayload at($offset)
 */
class OrderLineItemAddedMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderLineItemAddedMessagePayload $value
     * @psalm-param OrderLineItemAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderLineItemAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderLineItemAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderLineItemAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderLineItemAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderLineItemAddedMessagePayload $data */
                $data = OrderLineItemAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
