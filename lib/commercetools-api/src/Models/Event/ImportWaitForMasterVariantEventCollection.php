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
 * @extends EventCollection<ImportWaitForMasterVariantEvent>
 * @method ImportWaitForMasterVariantEvent current()
 * @method ImportWaitForMasterVariantEvent end()
 * @method ImportWaitForMasterVariantEvent at($offset)
 */
class ImportWaitForMasterVariantEventCollection extends EventCollection
{
    /**
     * @psalm-assert ImportWaitForMasterVariantEvent $value
     * @psalm-param ImportWaitForMasterVariantEvent|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportWaitForMasterVariantEventCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportWaitForMasterVariantEvent) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportWaitForMasterVariantEvent
     */
    protected function mapper()
    {
        return function (?int $index): ?ImportWaitForMasterVariantEvent {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportWaitForMasterVariantEvent $data */
                $data = ImportWaitForMasterVariantEventModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
