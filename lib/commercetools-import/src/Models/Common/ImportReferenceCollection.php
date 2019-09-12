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
 * @extends MapperSequence<ImportReference>
 *
 * @method ImportReference current()
 * @method ImportReference at($offset)
 */
class ImportReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportReference $value
     * @psalm-param ImportReference|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ImportReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportReference
     */
    protected function mapper()
    {
        return function (int $index): ?ImportReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ImportReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
