<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of Event
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method Event current()
 * @method Event end()
 * @method Event at($offset)
 */
class EventCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return EventCollection
     */
    public function add($value)
    {
        if (!$value instanceof Event) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?Event {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = EventModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
