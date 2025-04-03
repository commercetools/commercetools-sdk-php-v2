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
 * @extends EventCollection<ImportContainerDeletedEvent>
 * @method ImportContainerDeletedEvent current()
 * @method ImportContainerDeletedEvent end()
 * @method ImportContainerDeletedEvent at($offset)
 */
class ImportContainerDeletedEventCollection extends EventCollection
{
    /**
     * @psalm-assert ImportContainerDeletedEvent $value
     * @psalm-param ImportContainerDeletedEvent|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportContainerDeletedEventCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportContainerDeletedEvent) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportContainerDeletedEvent
     */
    protected function mapper()
    {
        return function (?int $index): ?ImportContainerDeletedEvent {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportContainerDeletedEvent $data */
                $data = ImportContainerDeletedEventModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
