<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ImportResource>
 * @method ImportResource current()
 * @method ImportResource at($offset)
 */
class ImportResourceCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportResource $value
     * @psalm-param ImportResource|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportResourceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportResource) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportResource
     */
    protected function mapper()
    {
        return function (int $index): ?ImportResource {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ImportResourceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
