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
 * @extends MapperSequence<ImportValidationFailedEventData>
 * @method ImportValidationFailedEventData current()
 * @method ImportValidationFailedEventData end()
 * @method ImportValidationFailedEventData at($offset)
 */
class ImportValidationFailedEventDataCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportValidationFailedEventData $value
     * @psalm-param ImportValidationFailedEventData|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportValidationFailedEventDataCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportValidationFailedEventData) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportValidationFailedEventData
     */
    protected function mapper()
    {
        return function (?int $index): ?ImportValidationFailedEventData {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportValidationFailedEventData $data */
                $data = ImportValidationFailedEventDataModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
