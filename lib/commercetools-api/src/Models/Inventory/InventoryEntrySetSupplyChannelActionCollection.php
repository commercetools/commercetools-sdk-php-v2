<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<InventoryEntrySetSupplyChannelAction>
 * @method InventoryEntrySetSupplyChannelAction current()
 * @method InventoryEntrySetSupplyChannelAction at($offset)
 */
class InventoryEntrySetSupplyChannelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert InventoryEntrySetSupplyChannelAction $value
     * @psalm-param InventoryEntrySetSupplyChannelAction|stdClass $value
     * @return InventoryEntrySetSupplyChannelActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntrySetSupplyChannelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntrySetSupplyChannelAction
     */
    protected function mapper()
    {
        return function(int $index): ?InventoryEntrySetSupplyChannelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InventoryEntrySetSupplyChannelActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}