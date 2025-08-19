<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\BusinessUnits;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of BusinessUnitImport
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method BusinessUnitImport current()
 * @method BusinessUnitImport end()
 * @method BusinessUnitImport at($offset)
 */
class BusinessUnitImportCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = BusinessUnitImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
