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
 * @extends OrderMessagePayloadCollection<OrderCustomFieldChangedMessagePayload>
 * @method OrderCustomFieldChangedMessagePayload current()
 * @method OrderCustomFieldChangedMessagePayload end()
 * @method OrderCustomFieldChangedMessagePayload at($offset)
 */
class OrderCustomFieldChangedMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderCustomFieldChangedMessagePayload $value
     * @psalm-param OrderCustomFieldChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomFieldChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomFieldChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomFieldChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomFieldChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomFieldChangedMessagePayload $data */
                $data = OrderCustomFieldChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
