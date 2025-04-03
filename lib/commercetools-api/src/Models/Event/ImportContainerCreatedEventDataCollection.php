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
 * @extends MapperSequence<ImportContainerCreatedEventData>
 * @method ImportContainerCreatedEventData current()
 * @method ImportContainerCreatedEventData end()
 * @method ImportContainerCreatedEventData at($offset)
 */
class ImportContainerCreatedEventDataCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportContainerCreatedEventData $value
     * @psalm-param ImportContainerCreatedEventData|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportContainerCreatedEventDataCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportContainerCreatedEventData) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportContainerCreatedEventData
     */
    protected function mapper()
    {
        return function (?int $index): ?ImportContainerCreatedEventData {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportContainerCreatedEventData $data */
                $data = ImportContainerCreatedEventDataModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
