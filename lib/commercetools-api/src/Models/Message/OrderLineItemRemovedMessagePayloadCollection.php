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
 * @extends OrderMessagePayloadCollection<OrderLineItemRemovedMessagePayload>
 * @method OrderLineItemRemovedMessagePayload current()
 * @method OrderLineItemRemovedMessagePayload end()
 * @method OrderLineItemRemovedMessagePayload at($offset)
 */
class OrderLineItemRemovedMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderLineItemRemovedMessagePayload $value
     * @psalm-param OrderLineItemRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderLineItemRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderLineItemRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderLineItemRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderLineItemRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderLineItemRemovedMessagePayload $data */
                $data = OrderLineItemRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
