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
 * @extends MessagePayloadCollection<OrderReturnInfoSetMessagePayload>
 * @method OrderReturnInfoSetMessagePayload current()
 * @method OrderReturnInfoSetMessagePayload end()
 * @method OrderReturnInfoSetMessagePayload at($offset)
 */
class OrderReturnInfoSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert OrderReturnInfoSetMessagePayload $value
     * @psalm-param OrderReturnInfoSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderReturnInfoSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderReturnInfoSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderReturnInfoSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderReturnInfoSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderReturnInfoSetMessagePayload $data */
                $data = OrderReturnInfoSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
