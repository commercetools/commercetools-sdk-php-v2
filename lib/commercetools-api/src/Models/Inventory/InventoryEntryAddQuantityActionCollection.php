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
 * @extends InventoryEntryUpdateActionCollection<InventoryEntryAddQuantityAction>
 * @method InventoryEntryAddQuantityAction current()
 * @method InventoryEntryAddQuantityAction at($offset)
 */
class InventoryEntryAddQuantityActionCollection extends InventoryEntryUpdateActionCollection
{
    /**
     * @psalm-assert InventoryEntryAddQuantityAction $value
     * @psalm-param InventoryEntryAddQuantityAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryAddQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryAddQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryAddQuantityAction
     */
    protected function mapper()
    {
        return function (int $index): ?InventoryEntryAddQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntryAddQuantityAction $data */
                $data = InventoryEntryAddQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
