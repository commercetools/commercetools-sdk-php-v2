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
 * @extends MapperSequence<ImportOperationPagedResponse>
 * @method ImportOperationPagedResponse current()
 * @method ImportOperationPagedResponse at($offset)
 */
class ImportOperationPagedResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportOperationPagedResponse $value
     * @psalm-param ImportOperationPagedResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportOperationPagedResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportOperationPagedResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportOperationPagedResponse
     */
    protected function mapper()
    {
        return function (int $index): ?ImportOperationPagedResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ImportOperationPagedResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
