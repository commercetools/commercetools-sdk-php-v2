<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Importrequests\ImportRequestCollection;
use stdClass;

/**
 * @extends ImportRequestCollection<BusinessUnitImportRequest>
 * @method BusinessUnitImportRequest current()
 * @method BusinessUnitImportRequest end()
 * @method BusinessUnitImportRequest at($offset)
 */
class BusinessUnitImportRequestCollection extends ImportRequestCollection
{
    /**
     * @psalm-assert BusinessUnitImportRequest $value
     * @psalm-param BusinessUnitImportRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitImportRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitImportRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitImportRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitImportRequest $data */
                $data = BusinessUnitImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
