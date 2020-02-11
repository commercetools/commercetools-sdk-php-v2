<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderLineItemAddedMessagePayload>
 * @method OrderLineItemAddedMessagePayload current()
 * @method OrderLineItemAddedMessagePayload at($offset)
 */
class OrderLineItemAddedMessagePayloadCollection extends MapperSequence
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
        return function (int $index): ?OrderLineItemAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderLineItemAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
