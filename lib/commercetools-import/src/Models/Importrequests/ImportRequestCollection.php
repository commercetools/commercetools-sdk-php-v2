<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ImportRequest>
 * @method ImportRequest current()
 * @method ImportRequest at($offset)
 */
class ImportRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportRequest $value
     * @psalm-param ImportRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportRequest
     */
    protected function mapper()
    {
        return function (int $index): ?ImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
