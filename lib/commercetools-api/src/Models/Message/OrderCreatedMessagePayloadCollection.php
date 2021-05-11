<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<OrderCreatedMessagePayload>
 * @method OrderCreatedMessagePayload current()
 * @method OrderCreatedMessagePayload at($offset)
 */
class OrderCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert OrderCreatedMessagePayload $value
     * @psalm-param OrderCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?OrderCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCreatedMessagePayload $data */
                $data = OrderCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
