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
 * @extends EventCollection<ImportUnresolvedEvent>
 * @method ImportUnresolvedEvent current()
 * @method ImportUnresolvedEvent end()
 * @method ImportUnresolvedEvent at($offset)
 */
class ImportUnresolvedEventCollection extends EventCollection
{
    /**
     * @psalm-assert ImportUnresolvedEvent $value
     * @psalm-param ImportUnresolvedEvent|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportUnresolvedEventCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportUnresolvedEvent) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportUnresolvedEvent
     */
    protected function mapper()
    {
        return function (?int $index): ?ImportUnresolvedEvent {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportUnresolvedEvent $data */
                $data = ImportUnresolvedEventModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
