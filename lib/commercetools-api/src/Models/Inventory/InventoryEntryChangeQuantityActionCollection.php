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
 * @extends InventoryEntryUpdateActionCollection<InventoryEntryChangeQuantityAction>
 * @method InventoryEntryChangeQuantityAction current()
 * @method InventoryEntryChangeQuantityAction at($offset)
 */
class InventoryEntryChangeQuantityActionCollection extends InventoryEntryUpdateActionCollection
{
    /**
     * @psalm-assert InventoryEntryChangeQuantityAction $value
     * @psalm-param InventoryEntryChangeQuantityAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryChangeQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryChangeQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryChangeQuantityAction
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntryChangeQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntryChangeQuantityAction $data */
                $data = InventoryEntryChangeQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
