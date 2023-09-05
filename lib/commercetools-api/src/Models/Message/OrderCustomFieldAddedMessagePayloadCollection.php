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
 * @extends OrderMessagePayloadCollection<OrderCustomFieldAddedMessagePayload>
 * @method OrderCustomFieldAddedMessagePayload current()
 * @method OrderCustomFieldAddedMessagePayload end()
 * @method OrderCustomFieldAddedMessagePayload at($offset)
 */
class OrderCustomFieldAddedMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderCustomFieldAddedMessagePayload $value
     * @psalm-param OrderCustomFieldAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomFieldAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomFieldAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomFieldAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomFieldAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomFieldAddedMessagePayload $data */
                $data = OrderCustomFieldAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
