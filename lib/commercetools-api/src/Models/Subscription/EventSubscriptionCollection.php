<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<EventSubscription>
 * @method EventSubscription current()
 * @method EventSubscription end()
 * @method EventSubscription at($offset)
 */
class EventSubscriptionCollection extends MapperSequence
{
    /**
     * @psalm-assert EventSubscription $value
     * @psalm-param EventSubscription|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return EventSubscriptionCollection
     */
    public function add($value)
    {
        if (!$value instanceof EventSubscription) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?EventSubscription
     */
    protected function mapper()
    {
        return function (?int $index): ?EventSubscription {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var EventSubscription $data */
                $data = EventSubscriptionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
