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
 * @extends OrderMessagePayloadCollection<OrderCustomTypeRemovedMessagePayload>
 * @method OrderCustomTypeRemovedMessagePayload current()
 * @method OrderCustomTypeRemovedMessagePayload end()
 * @method OrderCustomTypeRemovedMessagePayload at($offset)
 */
class OrderCustomTypeRemovedMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderCustomTypeRemovedMessagePayload $value
     * @psalm-param OrderCustomTypeRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomTypeRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomTypeRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomTypeRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomTypeRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomTypeRemovedMessagePayload $data */
                $data = OrderCustomTypeRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
