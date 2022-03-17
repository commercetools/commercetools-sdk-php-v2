<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Subscription\DeliveryPayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends DeliveryPayloadCollection<MessageDeliveryPayload>
 * @method MessageDeliveryPayload current()
 * @method MessageDeliveryPayload end()
 * @method MessageDeliveryPayload at($offset)
 */
class MessageDeliveryPayloadCollection extends DeliveryPayloadCollection
{
    /**
     * @psalm-assert MessageDeliveryPayload $value
     * @psalm-param MessageDeliveryPayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MessageDeliveryPayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof MessageDeliveryPayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MessageDeliveryPayload
     */
    protected function mapper()
    {
        return function (?int $index): ?MessageDeliveryPayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MessageDeliveryPayload $data */
                $data = MessageDeliveryPayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
