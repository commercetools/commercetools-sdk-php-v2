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
 * @extends MapperSequence<InventoryEntryUpdate>
 * @method InventoryEntryUpdate current()
 * @method InventoryEntryUpdate at($offset)
 */
class InventoryEntryUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert InventoryEntryUpdate $value
     * @psalm-param InventoryEntryUpdate|stdClass $value
     * @return InventoryEntryUpdateCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryUpdate
     */
    protected function mapper()
    {
        return function(int $index): ?InventoryEntryUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InventoryEntryUpdateModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}