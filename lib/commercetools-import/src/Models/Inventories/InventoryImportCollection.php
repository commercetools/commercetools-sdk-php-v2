<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Inventories;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\ImportResourceCollection;
use stdClass;

/**
 * @extends ImportResourceCollection<InventoryImport>
 * @method InventoryImport current()
 * @method InventoryImport end()
 * @method InventoryImport at($offset)
 */
class InventoryImportCollection extends ImportResourceCollection
{
    /**
     * @psalm-assert InventoryImport $value
     * @psalm-param InventoryImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryImport
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryImport $data */
                $data = InventoryImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
