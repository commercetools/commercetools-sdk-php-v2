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
 * @extends InventoryEntryUpdateActionCollection<InventoryEntryRemoveQuantityAction>
 * @method InventoryEntryRemoveQuantityAction current()
 * @method InventoryEntryRemoveQuantityAction at($offset)
 */
class InventoryEntryRemoveQuantityActionCollection extends InventoryEntryUpdateActionCollection
{
    /**
     * @psalm-assert InventoryEntryRemoveQuantityAction $value
     * @psalm-param InventoryEntryRemoveQuantityAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryRemoveQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryRemoveQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryRemoveQuantityAction
     */
    protected function mapper()
    {
        return function (int $index): ?InventoryEntryRemoveQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntryRemoveQuantityAction $data */
                $data = InventoryEntryRemoveQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
