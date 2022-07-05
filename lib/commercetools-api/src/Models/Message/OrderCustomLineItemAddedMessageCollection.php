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
 * @extends OrderMessageCollection<OrderCustomLineItemAddedMessage>
 * @method OrderCustomLineItemAddedMessage current()
 * @method OrderCustomLineItemAddedMessage end()
 * @method OrderCustomLineItemAddedMessage at($offset)
 */
class OrderCustomLineItemAddedMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert OrderCustomLineItemAddedMessage $value
     * @psalm-param OrderCustomLineItemAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomLineItemAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomLineItemAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomLineItemAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomLineItemAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomLineItemAddedMessage $data */
                $data = OrderCustomLineItemAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
