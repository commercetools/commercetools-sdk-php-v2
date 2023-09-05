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
 * @extends OrderMessagePayloadCollection<OrderCustomFieldRemovedMessagePayload>
 * @method OrderCustomFieldRemovedMessagePayload current()
 * @method OrderCustomFieldRemovedMessagePayload end()
 * @method OrderCustomFieldRemovedMessagePayload at($offset)
 */
class OrderCustomFieldRemovedMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderCustomFieldRemovedMessagePayload $value
     * @psalm-param OrderCustomFieldRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomFieldRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomFieldRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomFieldRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomFieldRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomFieldRemovedMessagePayload $data */
                $data = OrderCustomFieldRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
