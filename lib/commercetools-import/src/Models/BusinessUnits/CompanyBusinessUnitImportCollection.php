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
 * @extends BusinessUnitImportCollection<CompanyBusinessUnitImport>
 * @method CompanyBusinessUnitImport current()
 * @method CompanyBusinessUnitImport end()
 * @method CompanyBusinessUnitImport at($offset)
 */
class CompanyBusinessUnitImportCollection extends BusinessUnitImportCollection
{
    /**
     * @psalm-assert CompanyBusinessUnitImport $value
     * @psalm-param CompanyBusinessUnitImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CompanyBusinessUnitImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof CompanyBusinessUnitImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CompanyBusinessUnitImport
     */
    protected function mapper()
    {
        return function (?int $index): ?CompanyBusinessUnitImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CompanyBusinessUnitImport $data */
                $data = CompanyBusinessUnitImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
