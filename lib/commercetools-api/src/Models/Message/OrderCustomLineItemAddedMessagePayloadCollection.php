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
 * @extends OrderMessagePayloadCollection<OrderCustomLineItemAddedMessagePayload>
 * @method OrderCustomLineItemAddedMessagePayload current()
 * @method OrderCustomLineItemAddedMessagePayload end()
 * @method OrderCustomLineItemAddedMessagePayload at($offset)
 */
class OrderCustomLineItemAddedMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderCustomLineItemAddedMessagePayload $value
     * @psalm-param OrderCustomLineItemAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomLineItemAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomLineItemAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomLineItemAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomLineItemAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomLineItemAddedMessagePayload $data */
                $data = OrderCustomLineItemAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
