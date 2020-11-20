<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<InventoryImportRequest>
 * @method InventoryImportRequest current()
 * @method InventoryImportRequest at($offset)
 */
class InventoryImportRequestCollection extends MapperSequence
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
        return function (int $index): ?InventoryImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InventoryImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
