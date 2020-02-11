<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ImportSinkPagedResponse>
 * @method ImportSinkPagedResponse current()
 * @method ImportSinkPagedResponse at($offset)
 */
class ImportSinkPagedResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportSinkPagedResponse $value
     * @psalm-param ImportSinkPagedResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportSinkPagedResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportSinkPagedResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportSinkPagedResponse
     */
    protected function mapper()
    {
        return function (int $index): ?ImportSinkPagedResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ImportSinkPagedResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
