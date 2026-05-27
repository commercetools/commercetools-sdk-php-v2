<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Inventory\InventoryEntryUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends InventoryEntryUpdateActionCollection<InventoryEntrySetSafetyStockAction>
 * @method InventoryEntrySetSafetyStockAction current()
 * @method InventoryEntrySetSafetyStockAction end()
 * @method InventoryEntrySetSafetyStockAction at($offset)
 */
class InventoryEntrySetSafetyStockActionCollection extends InventoryEntryUpdateActionCollection
{
    /**
     * @psalm-assert InventoryEntrySetSafetyStockAction $value
     * @psalm-param InventoryEntrySetSafetyStockAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntrySetSafetyStockActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntrySetSafetyStockAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntrySetSafetyStockAction
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntrySetSafetyStockAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntrySetSafetyStockAction $data */
                $data = InventoryEntrySetSafetyStockActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
