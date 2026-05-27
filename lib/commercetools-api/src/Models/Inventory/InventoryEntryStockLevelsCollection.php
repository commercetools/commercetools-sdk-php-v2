<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<InventoryEntryStockLevels>
 * @method InventoryEntryStockLevels current()
 * @method InventoryEntryStockLevels end()
 * @method InventoryEntryStockLevels at($offset)
 */
class InventoryEntryStockLevelsCollection extends MapperSequence
{
    /**
     * @psalm-assert InventoryEntryStockLevels $value
     * @psalm-param InventoryEntryStockLevels|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryStockLevelsCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryStockLevels) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryStockLevels
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntryStockLevels {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntryStockLevels $data */
                $data = InventoryEntryStockLevelsModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
