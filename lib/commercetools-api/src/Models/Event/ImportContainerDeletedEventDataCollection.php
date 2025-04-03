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
 * @extends MapperSequence<ImportContainerDeletedEventData>
 * @method ImportContainerDeletedEventData current()
 * @method ImportContainerDeletedEventData end()
 * @method ImportContainerDeletedEventData at($offset)
 */
class ImportContainerDeletedEventDataCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportContainerDeletedEventData $value
     * @psalm-param ImportContainerDeletedEventData|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportContainerDeletedEventDataCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportContainerDeletedEventData) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportContainerDeletedEventData
     */
    protected function mapper()
    {
        return function (?int $index): ?ImportContainerDeletedEventData {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportContainerDeletedEventData $data */
                $data = ImportContainerDeletedEventDataModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
