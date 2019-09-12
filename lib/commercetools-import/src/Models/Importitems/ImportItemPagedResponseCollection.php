<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importitems;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ImportItemPagedResponse>
 *
 * @method ImportItemPagedResponse current()
 * @method ImportItemPagedResponse at($offset)
 */
class ImportItemPagedResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportItemPagedResponse $value
     * @psalm-param ImportItemPagedResponse|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ImportItemPagedResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportItemPagedResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportItemPagedResponse
     */
    protected function mapper()
    {
        return function (int $index): ?ImportItemPagedResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ImportItemPagedResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
