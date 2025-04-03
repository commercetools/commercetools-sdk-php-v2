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
 * @extends MapperSequence<ImportOperationRejectedEventData>
 * @method ImportOperationRejectedEventData current()
 * @method ImportOperationRejectedEventData end()
 * @method ImportOperationRejectedEventData at($offset)
 */
class ImportOperationRejectedEventDataCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportOperationRejectedEventData $value
     * @psalm-param ImportOperationRejectedEventData|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportOperationRejectedEventDataCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportOperationRejectedEventData) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportOperationRejectedEventData
     */
    protected function mapper()
    {
        return function (?int $index): ?ImportOperationRejectedEventData {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportOperationRejectedEventData $data */
                $data = ImportOperationRejectedEventDataModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
