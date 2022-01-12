<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Subscription\DestinationCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends DestinationCollection<EventBridgeDestination>
 * @method EventBridgeDestination current()
 * @method EventBridgeDestination end()
 * @method EventBridgeDestination at($offset)
 */
class EventBridgeDestinationCollection extends DestinationCollection
{
    /**
     * @psalm-assert EventBridgeDestination $value
     * @psalm-param EventBridgeDestination|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return EventBridgeDestinationCollection
     */
    public function add($value)
    {
        if (!$value instanceof EventBridgeDestination) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?EventBridgeDestination
     */
    protected function mapper()
    {
        return function (?int $index): ?EventBridgeDestination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var EventBridgeDestination $data */
                $data = EventBridgeDestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
