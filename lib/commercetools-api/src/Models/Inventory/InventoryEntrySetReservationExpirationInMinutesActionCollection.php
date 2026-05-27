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
 * @extends InventoryEntryUpdateActionCollection<InventoryEntrySetReservationExpirationInMinutesAction>
 * @method InventoryEntrySetReservationExpirationInMinutesAction current()
 * @method InventoryEntrySetReservationExpirationInMinutesAction end()
 * @method InventoryEntrySetReservationExpirationInMinutesAction at($offset)
 */
class InventoryEntrySetReservationExpirationInMinutesActionCollection extends InventoryEntryUpdateActionCollection
{
    /**
     * @psalm-assert InventoryEntrySetReservationExpirationInMinutesAction $value
     * @psalm-param InventoryEntrySetReservationExpirationInMinutesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntrySetReservationExpirationInMinutesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntrySetReservationExpirationInMinutesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntrySetReservationExpirationInMinutesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?InventoryEntrySetReservationExpirationInMinutesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntrySetReservationExpirationInMinutesAction $data */
                $data = InventoryEntrySetReservationExpirationInMinutesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
