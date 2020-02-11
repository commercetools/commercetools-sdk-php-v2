<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<InventoryEntryUpdateAction>
 * @method InventoryEntryUpdateAction current()
 * @method InventoryEntryUpdateAction at($offset)
 */
class InventoryEntryUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert InventoryEntryUpdateAction $value
     * @psalm-param InventoryEntryUpdateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?InventoryEntryUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InventoryEntryUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
