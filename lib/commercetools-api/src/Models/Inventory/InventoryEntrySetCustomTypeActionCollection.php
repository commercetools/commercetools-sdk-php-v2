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
 * @extends InventoryEntryUpdateActionCollection<InventoryEntrySetCustomTypeAction>
 * @method InventoryEntrySetCustomTypeAction current()
 * @method InventoryEntrySetCustomTypeAction at($offset)
 */
class InventoryEntrySetCustomTypeActionCollection extends InventoryEntryUpdateActionCollection
{
    /**
     * @psalm-assert InventoryEntrySetCustomTypeAction $value
     * @psalm-param InventoryEntrySetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntrySetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntrySetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntrySetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntrySetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntrySetCustomTypeAction $data */
                $data = InventoryEntrySetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
