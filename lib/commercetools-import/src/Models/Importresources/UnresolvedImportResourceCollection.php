<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importresources;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<UnresolvedImportResource>
 *
 * @method UnresolvedImportResource current()
 * @method UnresolvedImportResource at($offset)
 */
class UnresolvedImportResourceCollection extends MapperSequence
{
    /**
     * @psalm-assert UnresolvedImportResource $value
     * @psalm-param UnresolvedImportResource|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return UnresolvedImportResourceCollection
     */
    public function add($value)
    {
        if (!$value instanceof UnresolvedImportResource) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?UnresolvedImportResource
     */
    protected function mapper()
    {
        return function (int $index): ?UnresolvedImportResource {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = UnresolvedImportResourceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
