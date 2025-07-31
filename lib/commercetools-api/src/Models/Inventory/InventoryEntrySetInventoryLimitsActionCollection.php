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
 * @extends InventoryEntryUpdateActionCollection<InventoryEntrySetInventoryLimitsAction>
 * @method InventoryEntrySetInventoryLimitsAction current()
 * @method InventoryEntrySetInventoryLimitsAction end()
 * @method InventoryEntrySetInventoryLimitsAction at($offset)
 */
class InventoryEntrySetInventoryLimitsActionCollection extends InventoryEntryUpdateActionCollection
{
    /**
     * @psalm-assert InventoryEntrySetInventoryLimitsAction $value
     * @psalm-param InventoryEntrySetInventoryLimitsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntrySetInventoryLimitsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntrySetInventoryLimitsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntrySetInventoryLimitsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntrySetInventoryLimitsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntrySetInventoryLimitsAction $data */
                $data = InventoryEntrySetInventoryLimitsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
