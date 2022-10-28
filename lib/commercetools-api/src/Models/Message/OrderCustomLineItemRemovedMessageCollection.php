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
 * @extends OrderMessageCollection<OrderCustomLineItemRemovedMessage>
 * @method OrderCustomLineItemRemovedMessage current()
 * @method OrderCustomLineItemRemovedMessage end()
 * @method OrderCustomLineItemRemovedMessage at($offset)
 */
class OrderCustomLineItemRemovedMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert OrderCustomLineItemRemovedMessage $value
     * @psalm-param OrderCustomLineItemRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomLineItemRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomLineItemRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomLineItemRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomLineItemRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomLineItemRemovedMessage $data */
                $data = OrderCustomLineItemRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
