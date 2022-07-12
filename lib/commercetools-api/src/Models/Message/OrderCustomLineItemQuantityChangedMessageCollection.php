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
 * @extends OrderMessageCollection<OrderCustomLineItemQuantityChangedMessage>
 * @method OrderCustomLineItemQuantityChangedMessage current()
 * @method OrderCustomLineItemQuantityChangedMessage end()
 * @method OrderCustomLineItemQuantityChangedMessage at($offset)
 */
class OrderCustomLineItemQuantityChangedMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert OrderCustomLineItemQuantityChangedMessage $value
     * @psalm-param OrderCustomLineItemQuantityChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomLineItemQuantityChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomLineItemQuantityChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomLineItemQuantityChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomLineItemQuantityChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomLineItemQuantityChangedMessage $data */
                $data = OrderCustomLineItemQuantityChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
