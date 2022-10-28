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
 * @extends OrderMessagePayloadCollection<OrderCustomLineItemRemovedMessagePayload>
 * @method OrderCustomLineItemRemovedMessagePayload current()
 * @method OrderCustomLineItemRemovedMessagePayload end()
 * @method OrderCustomLineItemRemovedMessagePayload at($offset)
 */
class OrderCustomLineItemRemovedMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderCustomLineItemRemovedMessagePayload $value
     * @psalm-param OrderCustomLineItemRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomLineItemRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomLineItemRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomLineItemRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomLineItemRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomLineItemRemovedMessagePayload $data */
                $data = OrderCustomLineItemRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
