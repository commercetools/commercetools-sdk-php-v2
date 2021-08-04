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
 * @extends ImportRequestCollection<InventoryImportRequest>
 * @method InventoryImportRequest current()
 * @method InventoryImportRequest at($offset)
 */
class InventoryImportRequestCollection extends ImportRequestCollection
{
    /**
     * @psalm-assert InventoryImportRequest $value
     * @psalm-param InventoryImportRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryImportRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryImportRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryImportRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryImportRequest $data */
                $data = InventoryImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
