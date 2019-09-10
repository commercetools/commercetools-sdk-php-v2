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
 * @extends MapperSequence<InventoryEntryAddQuantityAction>
 *
 * @method InventoryEntryAddQuantityAction current()
 * @method InventoryEntryAddQuantityAction at($offset)
 */
class InventoryEntryAddQuantityActionCollection extends MapperSequence
{
    /**
     * @psalm-assert InventoryEntryAddQuantityAction $value
     * @psalm-param InventoryEntryAddQuantityAction|stdClass $value
     *
     * @param mixed $value
     *
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
                $data = InventoryEntryAddQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
