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
 * @extends OrderMessagePayloadCollection<OrderReturnInfoAddedMessagePayload>
 * @method OrderReturnInfoAddedMessagePayload current()
 * @method OrderReturnInfoAddedMessagePayload end()
 * @method OrderReturnInfoAddedMessagePayload at($offset)
 */
class OrderReturnInfoAddedMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderReturnInfoAddedMessagePayload $value
     * @psalm-param OrderReturnInfoAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderReturnInfoAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderReturnInfoAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderReturnInfoAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderReturnInfoAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderReturnInfoAddedMessagePayload $data */
                $data = OrderReturnInfoAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
