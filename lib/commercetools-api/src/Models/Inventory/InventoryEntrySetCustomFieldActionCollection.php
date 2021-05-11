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
 * @extends InventoryEntryUpdateActionCollection<InventoryEntrySetCustomFieldAction>
 * @method InventoryEntrySetCustomFieldAction current()
 * @method InventoryEntrySetCustomFieldAction at($offset)
 */
class InventoryEntrySetCustomFieldActionCollection extends InventoryEntryUpdateActionCollection
{
    /**
     * @psalm-assert InventoryEntrySetCustomFieldAction $value
     * @psalm-param InventoryEntrySetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntrySetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntrySetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntrySetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?InventoryEntrySetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntrySetCustomFieldAction $data */
                $data = InventoryEntrySetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
