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
 * @extends OrderMessageCollection<OrderLineItemRemovedMessage>
 * @method OrderLineItemRemovedMessage current()
 * @method OrderLineItemRemovedMessage end()
 * @method OrderLineItemRemovedMessage at($offset)
 */
class OrderLineItemRemovedMessageCollection extends OrderMessageCollection
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
