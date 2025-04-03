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
 * @extends MapperSequence<BaseEvent>
 * @method BaseEvent current()
 * @method BaseEvent end()
 * @method BaseEvent at($offset)
 */
class BaseEventCollection extends MapperSequence
{
    /**
     * @psalm-assert BaseEvent $value
     * @psalm-param BaseEvent|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BaseEventCollection
     */
    public function add($value)
    {
        if (!$value instanceof BaseEvent) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BaseEvent
     */
    protected function mapper()
    {
        return function (?int $index): ?BaseEvent {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BaseEvent $data */
                $data = BaseEventModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
