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
 * @extends EventCollection<ImportOperationRejectedEvent>
 * @method ImportOperationRejectedEvent current()
 * @method ImportOperationRejectedEvent end()
 * @method ImportOperationRejectedEvent at($offset)
 */
class ImportOperationRejectedEventCollection extends EventCollection
{
    /**
     * @psalm-assert ImportOperationRejectedEvent $value
     * @psalm-param ImportOperationRejectedEvent|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportOperationRejectedEventCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportOperationRejectedEvent) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportOperationRejectedEvent
     */
    protected function mapper()
    {
        return function (?int $index): ?ImportOperationRejectedEvent {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportOperationRejectedEvent $data */
                $data = ImportOperationRejectedEventModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
