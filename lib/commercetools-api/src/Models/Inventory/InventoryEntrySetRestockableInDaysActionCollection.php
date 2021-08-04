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
 * @extends InventoryEntryUpdateActionCollection<InventoryEntrySetRestockableInDaysAction>
 * @method InventoryEntrySetRestockableInDaysAction current()
 * @method InventoryEntrySetRestockableInDaysAction end()
 * @method InventoryEntrySetRestockableInDaysAction at($offset)
 */
class InventoryEntrySetRestockableInDaysActionCollection extends InventoryEntryUpdateActionCollection
{
    /**
     * @psalm-assert InventoryEntrySetRestockableInDaysAction $value
     * @psalm-param InventoryEntrySetRestockableInDaysAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntrySetRestockableInDaysActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntrySetRestockableInDaysAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntrySetRestockableInDaysAction
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntrySetRestockableInDaysAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntrySetRestockableInDaysAction $data */
                $data = InventoryEntrySetRestockableInDaysActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
