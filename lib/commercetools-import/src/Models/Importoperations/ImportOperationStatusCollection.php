<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importoperations;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ImportOperationStatus>
 * @method ImportOperationStatus current()
 * @method ImportOperationStatus at($offset)
 */
class ImportOperationStatusCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportOperationStatus $value
     * @psalm-param ImportOperationStatus|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportOperationStatusCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportOperationStatus) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportOperationStatus
     */
    protected function mapper()
    {
        return function (?int $index): ?ImportOperationStatus {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportOperationStatus $data */
                $data = ImportOperationStatusModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
