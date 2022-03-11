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
 * @extends InventoryEntryUpdateActionCollection<InventoryEntrySetKeyAction>
 * @method InventoryEntrySetKeyAction current()
 * @method InventoryEntrySetKeyAction end()
 * @method InventoryEntrySetKeyAction at($offset)
 */
class InventoryEntrySetKeyActionCollection extends InventoryEntryUpdateActionCollection
{
    /**
     * @psalm-assert InventoryEntrySetKeyAction $value
     * @psalm-param InventoryEntrySetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntrySetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntrySetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntrySetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntrySetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntrySetKeyAction $data */
                $data = InventoryEntrySetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
