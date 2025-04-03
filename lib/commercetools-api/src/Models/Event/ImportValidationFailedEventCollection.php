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
 * @extends EventCollection<ImportValidationFailedEvent>
 * @method ImportValidationFailedEvent current()
 * @method ImportValidationFailedEvent end()
 * @method ImportValidationFailedEvent at($offset)
 */
class ImportValidationFailedEventCollection extends EventCollection
{
    /**
     * @psalm-assert ImportValidationFailedEvent $value
     * @psalm-param ImportValidationFailedEvent|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportValidationFailedEventCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportValidationFailedEvent) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportValidationFailedEvent
     */
    protected function mapper()
    {
        return function (?int $index): ?ImportValidationFailedEvent {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportValidationFailedEvent $data */
                $data = ImportValidationFailedEventModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
