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
 * @extends OrderMessagePayloadCollection<OrderCustomTypeSetMessagePayload>
 * @method OrderCustomTypeSetMessagePayload current()
 * @method OrderCustomTypeSetMessagePayload end()
 * @method OrderCustomTypeSetMessagePayload at($offset)
 */
class OrderCustomTypeSetMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderCustomTypeSetMessagePayload $value
     * @psalm-param OrderCustomTypeSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomTypeSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomTypeSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomTypeSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomTypeSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomTypeSetMessagePayload $data */
                $data = OrderCustomTypeSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
