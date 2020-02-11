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
 * @extends MapperSequence<InventoryEntryResourceIdentifier>
 * @method InventoryEntryResourceIdentifier current()
 * @method InventoryEntryResourceIdentifier at($offset)
 */
class InventoryEntryResourceIdentifierCollection extends MapperSequence
{
    /**
     * @psalm-assert InventoryEntryResourceIdentifier $value
     * @psalm-param InventoryEntryResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntryResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntryResourceIdentifier
     */
    protected function mapper()
    {
        return function (int $index): ?InventoryEntryResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InventoryEntryResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
