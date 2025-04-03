<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Api\Models\Event\EventCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends EventCollection<ImportContainerCreatedEvent>
 * @method ImportContainerCreatedEvent current()
 * @method ImportContainerCreatedEvent end()
 * @method ImportContainerCreatedEvent at($offset)
 */
class ImportContainerCreatedEventCollection extends EventCollection
{
    /**
     * @psalm-assert ImportContainerCreatedEvent $value
     * @psalm-param ImportContainerCreatedEvent|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportContainerCreatedEventCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportContainerCreatedEvent) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportContainerCreatedEvent
     */
    protected function mapper()
    {
        return function (?int $index): ?ImportContainerCreatedEvent {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportContainerCreatedEvent $data */
                $data = ImportContainerCreatedEventModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
