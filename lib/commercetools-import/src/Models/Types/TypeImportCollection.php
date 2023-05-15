<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Types;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\ImportResourceCollection;
use stdClass;

/**
 * @extends ImportResourceCollection<TypeImport>
 * @method TypeImport current()
 * @method TypeImport end()
 * @method TypeImport at($offset)
 */
class TypeImportCollection extends ImportResourceCollection
{
    /**
     * @psalm-assert TypeImport $value
     * @psalm-param TypeImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeImport
     */
    protected function mapper()
    {
        return function (?int $index): ?TypeImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeImport $data */
                $data = TypeImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
