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
 * @extends InventoryEntryUpdateActionCollection<InventoryEntrySetReorderPointAction>
 * @method InventoryEntrySetReorderPointAction current()
 * @method InventoryEntrySetReorderPointAction end()
 * @method InventoryEntrySetReorderPointAction at($offset)
 */
class InventoryEntrySetReorderPointActionCollection extends InventoryEntryUpdateActionCollection
{
    /**
     * @psalm-assert InventoryEntrySetReorderPointAction $value
     * @psalm-param InventoryEntrySetReorderPointAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntrySetReorderPointActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntrySetReorderPointAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntrySetReorderPointAction
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntrySetReorderPointAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntrySetReorderPointAction $data */
                $data = InventoryEntrySetReorderPointActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
