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
 * @extends MessageCollection<OrderLineItemRemovedMessage>
 * @method OrderLineItemRemovedMessage current()
 * @method OrderLineItemRemovedMessage end()
 * @method OrderLineItemRemovedMessage at($offset)
 */
class OrderLineItemRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert OrderLineItemRemovedMessage $value
     * @psalm-param OrderLineItemRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderLineItemRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderLineItemRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderLineItemRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderLineItemRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderLineItemRemovedMessage $data */
                $data = OrderLineItemRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
