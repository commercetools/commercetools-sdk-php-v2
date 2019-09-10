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
 * @extends MapperSequence<InventoryEntryRemoveQuantityAction>
 *
 * @method InventoryEntryRemoveQuantityAction current()
 * @method InventoryEntryRemoveQuantityAction at($offset)
 */
class InventoryEntryRemoveQuantityActionCollection extends MapperSequence
{
    /**
     * @psalm-assert InventoryEntryRemoveQuantityAction $value
     * @psalm-param InventoryEntryRemoveQuantityAction|stdClass $value
     *
     * @param mixed $value
     *
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
                $data = InventoryEntryRemoveQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
