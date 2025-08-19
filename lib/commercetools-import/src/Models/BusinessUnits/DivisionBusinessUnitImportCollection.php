<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\BusinessUnits;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\BusinessUnits\BusinessUnitImportCollection;
use stdClass;

/**
 * @extends BusinessUnitImportCollection<DivisionBusinessUnitImport>
 * @method DivisionBusinessUnitImport current()
 * @method DivisionBusinessUnitImport end()
 * @method DivisionBusinessUnitImport at($offset)
 */
class DivisionBusinessUnitImportCollection extends BusinessUnitImportCollection
{
    /**
     * @psalm-assert DivisionBusinessUnitImport $value
     * @psalm-param DivisionBusinessUnitImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DivisionBusinessUnitImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof DivisionBusinessUnitImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DivisionBusinessUnitImport
     */
    protected function mapper()
    {
        return function (?int $index): ?DivisionBusinessUnitImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DivisionBusinessUnitImport $data */
                $data = DivisionBusinessUnitImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
