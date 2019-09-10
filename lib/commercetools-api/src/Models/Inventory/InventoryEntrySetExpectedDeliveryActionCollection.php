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
 * @extends MapperSequence<InventoryEntrySetExpectedDeliveryAction>
 *
 * @method InventoryEntrySetExpectedDeliveryAction current()
 * @method InventoryEntrySetExpectedDeliveryAction at($offset)
 */
class InventoryEntrySetExpectedDeliveryActionCollection extends MapperSequence
{
    /**
     * @psalm-assert InventoryEntrySetExpectedDeliveryAction $value
     * @psalm-param InventoryEntrySetExpectedDeliveryAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return InventoryEntrySetExpectedDeliveryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntrySetExpectedDeliveryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntrySetExpectedDeliveryAction
     */
    protected function mapper()
    {
        return function (int $index): ?InventoryEntrySetExpectedDeliveryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InventoryEntrySetExpectedDeliveryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
