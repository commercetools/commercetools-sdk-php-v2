<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Subscription\SubscriptionNotificationCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends SubscriptionNotificationCollection<EventDeliveryPayload>
 * @method EventDeliveryPayload current()
 * @method EventDeliveryPayload end()
 * @method EventDeliveryPayload at($offset)
 */
class EventDeliveryPayloadCollection extends SubscriptionNotificationCollection
{
    /**
     * @psalm-assert EventDeliveryPayload $value
     * @psalm-param EventDeliveryPayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return EventDeliveryPayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof EventDeliveryPayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?EventDeliveryPayload
     */
    protected function mapper()
    {
        return function (?int $index): ?EventDeliveryPayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var EventDeliveryPayload $data */
                $data = EventDeliveryPayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
