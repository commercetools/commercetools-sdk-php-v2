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
 * @extends OrderMessagePayloadCollection<OrderCustomLineItemQuantityChangedMessagePayload>
 * @method OrderCustomLineItemQuantityChangedMessagePayload current()
 * @method OrderCustomLineItemQuantityChangedMessagePayload end()
 * @method OrderCustomLineItemQuantityChangedMessagePayload at($offset)
 */
class OrderCustomLineItemQuantityChangedMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderCustomLineItemQuantityChangedMessagePayload $value
     * @psalm-param OrderCustomLineItemQuantityChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomLineItemQuantityChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomLineItemQuantityChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomLineItemQuantityChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomLineItemQuantityChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomLineItemQuantityChangedMessagePayload $data */
                $data = OrderCustomLineItemQuantityChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
